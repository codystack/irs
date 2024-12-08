/**
 * Main app logic
 */

// main app scope
var app = {};

// defining app modules for data
app.data = {
    booklet: [], // populated via app-data.js
    questions: [], // populated via app-data.js
    result_levels: [], // populated via app-data.js
}

// defining app status module
app.status = {
    current_set: 0,
    current_question: 0,
    wrong_answers: 0,
    correct_answers: 0,
}

// init app on DOM ready
$(document).ready(function() {
    app.init();
});

/**
 * Init app when all elements are loaded
 */
app.init = function() {

    // generate question lists
    app.generateQuestions();

    // generate booklet
    app.generateBooklet();

    // init dragg & drop
    app.initDragAndDrop();

    // load booklet pages
    app.loadBookletPages();

    // init booklet
    app.initBooklet();

    // init questions
    app.initQuestions();
}

/**
 * Generate question DOM structure
 */
app.generateQuestions = function() {
    // get set container
    var set_container = $('#question-container');

    // for all sets
    for (var i = 0; i < app.data.questions.length; i++) {
        // generate single set
        app.generateSingleSet(i, set_container);
    };

}

/**
 * Generate single set
 * @param  {int} set_no number of set
 * @param  {jQuery object} container  container for sets
 */
app.generateSingleSet = function(set_no, container) {
    var html = '';

    // add to set container
    html = '<div data-set="' + set_no + '" class="panel-group" role="tablist"></div>';
    container.append(html);

    var question_container = $('#question-container div[data-set="' + set_no + '"]');

    // for all question in set
    for (var i = 0; i < app.data.questions[set_no].length; i++) {
        // generate single question
        app.generateSingleQuestion(set_no, i, question_container);
    };
}

/**
 * Generate single question
 * @param  {integer} set_no      set no
 * @param  {integer} question_no question no
 * @param  {jQuery object} container  container for questions
 */
app.generateSingleQuestion = function(set_no, question_no, container) {
    var html = '',
        header = app.data.questions[set_no][question_no].question,
        description = app.data.questions[set_no][question_no].description,
        hint = app.data.questions[set_no][question_no].hint,
        correct_answers = app.data.questions[set_no][question_no].correct_answers_count,
        answered = 0;

    // populate question
    html = '<div data-question="' + question_no + '" class="panel panel-default">' +
        '<div class="panel-heading" role="tab" id="heading-question' + set_no + '-' + question_no + '">' +
        '<h4 class="panel-title">' +
        '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#question' + set_no + '-' + question_no + '">' +
        header +
        '<span class="label pull-right label-success">Answered</span></a></h4></div>' +
        '<div id="question' + set_no + '-' + question_no + '" class="panel-collapse collapse" role="tabpanel">' +
        '<div class="panel-body">' +
        '<p>' + description + '</p>' +
        '<div class="answer-hint alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign"></span> ' + hint + '</div>' +
        '<h4>Your answers <span class="badge"><span class="answer-counter">' + answered + '</span> / ' + correct_answers + '</span></h4>' +
        '<div class="answer-container"></div>' +
        '</div></div></div>';

    // add question to container
    container.append(html);
}


/**
 * Generate booklet DOM structure
 */
app.generateBooklet = function() {
    var nav_container = $('#booklet-nav .list-inline'),
        page_container = $('#booklet-pages');

    // for each page create button & container
    for (var i = 0; i < app.data.booklet.length; i++) {
        var html = '<li>' +
            '<a href="#/" data-page="' + i + '">' + app.data.booklet[i].name + '</a>' +
            '</li>';
        nav_container.append(html);

        html = '<div class="booklet-page page-' + i + '"></div>';
        page_container.append(html);
    };
}

/**
 * Load all booklet pages
 */
app.loadBookletPages = function() {

    for (var i = 0; i < app.data.booklet.length; i++) {
        app.loadSingleBookletPage(app.data.booklet[i].url, i);
    };
}

/**
 * Load booklet single page content to associated page container
 * @param  {string} page_url page url
 * @param  {integer} page_no page no
 */
app.loadSingleBookletPage = function(page_url, page_no) {
    // ajax call
    $.ajax({
            url: "assets/cyber-js/booklet-pages/" + page_url,
        })
        .done(function(data) { // when data loaded
            $('#booklet-pages .page-' + page_no).html(data);
            // add more elements to drag & drop pool
            var targets = $('#booklet-pages .page-' + page_no + ' .draggable-container'),
                container = [];
            for (var i = 0; i < targets.length; i++) {
                app.drag_controller.containers.push(targets[i]);
            };

        });
}


/**
 * Init first page in booklet & add events
 */
app.initBooklet = function() {
    // add events to page buttons
    $('#booklet-nav .list-inline a').click(function() {
        show($(this));
    });

    // show target
    var show = function(target) {

        // if already active - ignore
        if (!target.hasClass('active')) {
            var target_page_no = target.data('page');

            // make other buttons unactive
            $('#booklet-nav .list-inline a').removeClass('active');

            // mark button active
            target.addClass('active');

            // hide all containers
            $('#booklet-pages > div').removeClass('active');

            // show container with delay - lets give time other to fade out
            setTimeout(function() {
                $('#booklet-pages .page-' + target_page_no).addClass('active');
            }, 400);

        }

        // prevent any other default click action
        return false;
    }

    // init for first container
    show($('#booklet-nav .list-inline a[data-page="0"]'));
}

/**
 * Init first question, add events
 */
app.initQuestions = function() {
    // set referrence for next button
    app.next_set_button = $('#set-nav .next a');
    app.next_set_button_parent = $('#set-nav .next');

    // set referrence for results button
    app.result_button = $('#set-nav .result a');
    app.result_button_parent = $('#set-nav .result');

    // on next click
    app.next_set_button.click(function() {
        if (app.canSwitchSet()) {
            // move to next set
            app.switchSet(app.status.current_set + 1);
        }
        return false;
    });

    // on result click
    app.result_button.click(function() {
        app.showResults();
        return false;
    });

    // manualy setup first set
    app.switchSet(0);
    app.canSwitchSet();

    // manualy setup first question
    app.activateQuestion(0);

}

/**
 * Activate question & set it as current
 * @param  {integer} question_no no of question to activate
 */
app.activateQuestion = function(question_no) {
    // activate question
    var target = $('#question-container > .panel-group[data-set="' + app.status.current_set + '"] > .panel[data-question="' + question_no + '"]').addClass('active');
    // expand with delay
    setTimeout(function() {
        $(target.find('.panel-collapse')).collapse();
    }, 700);

    // set current question
    app.status.current_question = question_no;
}

/**
 * switch to next set
 * @param  {integer} set_no no of set to switch to
 */
app.switchSet = function(set_no) {
    // save no of new set
    app.status.current_set = set_no;

    // hide all sets
    $('#question-container > .panel-group').removeClass('active');

    // show desired set with delay
    setTimeout(function() {
        var target = $('#question-container > .panel-group[data-set="' + set_no + '"]');
        target.addClass('active');

        // show 0 question
        setTimeout(function() {
            app.activateQuestion(0);
        }, 400)
    }, 400);

    // disable next-set button
    app.next_set_button_parent.addClass('disabled');

    // if thats the last set
    if (set_no + 1 >= app.data.questions.length) {
        app.next_set_button.hide();
    }
}

/**
 * On drop check if question answered
 */
app.checkIfQuestionAnswered = function(target, drop_container, parent_container) {
    var target = $(target),
        drop_container = $(drop_container),
        parent_container = $(parent_container);

    // if not draggable (source) container
    if (!drop_container.hasClass('draggable-container')) {

        // find question main container
        var drop_container_question_container = $(drop_container.closest('.panel')),
            // find question set container
            drop_container_set_container = $(drop_container.closest('.panel-group'));


        // extract answer data as object - jquery data converts valid json
        // syntax automatically to object
        var answer = target.data('answer');

        var droped_answer_match_question = false;

        // extract drop container data
        var drop_set = drop_container_set_container.data('set'),
            drop_question = drop_container_question_container.data('question');

        // lets check if any of question markers incorporated into answer
        // matches current question
        for (var key in answer) {
            if(answer[key].set == drop_set && answer[key].question == drop_question){
                // lets proceed
                droped_answer_match_question = true;
                break;
            }
        }

        // answer match set & question
        if (droped_answer_match_question) {
            // indicate success
            target
            // mark droped element as correct
                .removeClass('btn-warning')
                .addClass('btn-success');

            // change icon
            $(target.find('span'))
                .removeClass('glyphicon-move')
                .addClass('glyphicon-ok');

            // note correct answers
            app.status.correct_answers += 1;

            // hide hint
            drop_container_question_container.removeClass('wrong-answer');

            var amount_of_answered_questions = drop_container.find('.btn-success').length;

            // update score on question
            drop_container_question_container.find('.panel-body .badge .answer-counter')
                .html(amount_of_answered_questions);

            // check if current question answered
            if (amount_of_answered_questions == app.data.questions[drop_set][drop_question].correct_answers_count) {
                // if so add label answered
                drop_container_question_container.addClass('answered');
                // mark container as answered to visually infrom user that he cant drop anymore answers
                drop_container.addClass('answer-container--answered');

                // remove all wrong answers
                var wrong_answers = drop_container.find('.btn-danger');
                wrong_answers.each(function(index) {
                    app.removeWrongAnswer(this);
                });

                // mark question as completed
                app.data.questions[app.status.current_set][app.status.current_question].completed = true;

                if (app.status.completed = true){

                    setTimeout(function() { 
                    $('.panel-title > a').addClass('collapsed');              
                    $('.panel-deafult').addClass('active');
                    $('.panel-deafult').addClass('answered');
                    $('.panel-collapse').addClass('collapse');
                    $('.panel-title > a').attr("aria-expanded","false");
                    $('.panel-collapse').css('height', '0px');  
                    }, 500);     
                }

                // if more question to answer enable next question

                if (!app.canSwitchSet()) {
                    app.activateQuestion(app.status.current_question + 1);
                }
            }
        } else {
            // if current drop incorrect
            // indicate error
            target
            // mark droped element as incorrect
                .removeClass('btn-warning')
                .addClass('btn-danger');

            // change icon
            $(target.find('span'))
                .removeClass('glyphicon-move')
                .addClass('glyphicon-remove');

            // note that error in status
            app.status.wrong_answers += 1;

            // show hint
            drop_container_question_container.addClass('wrong-answer');

            // ad on click event to remove element from DOM
            target.click(function() {
                app.removeWrongAnswer(this);
            })
        }
    }
}

/**
 * Remove wrong answer from DOM
 */
app.removeWrongAnswer = function(target) {
    $(target).remove();
}

/**
 * On drag check if allowed to drag
 */
app.checkIfAllawedToDrag = function(target, parent_container) {
    // check if we want to drag element with success or danger - if yes ignore
    // else save element parent used fot revert
    target = $(target);
    if (target.hasClass('btn-success') || target.hasClass('btn-danger')) {
        // dont allow
        return false;
    } else {
        // allow
        return true;
    }
}

/**
 * Show results
 */
app.showResults = function() {
    // populate result modal
    app.populateResultModal();

    // show modal
    $('#result-modal').modal({
        keyboard: false
    })

    // start again button click
    $('#result-modal .btn').click(function() {
        location.reload();
    });
}

/**
 * Calculate results & populate modal
 */
app.populateResultModal = function() {
    // We present result based on score – score calculated based equation: ( 1 - ( [total_wrong_answers] / [total_amount_of_answers] )) * 100 which gives us scale from 0 to 100
    var modal = $('#result-modal'),
        modal_label = $('#result-modal-label'),
        modal_description = $('#result-modal-description'),
        score = Math.round([app.status.wrong_answers]);

    // for each level listed
    for (var i = 0; i < app.data.result_levels.length; i++) {
        // if score fits level requirements
        if (app.data.result_levels[i].from <= score && score <= app.data.result_levels[i].to) {
            // set modal class
            modal
                .addClass('modal-result--' + app.data.result_levels[i].type);

            // set label
            modal_label
                .addClass('modal-label--' + app.data.result_levels[i].type)
                .html(app.data.result_levels[i].title);

            // set label & description
            modal_description
                .addClass('modal-description--' + app.data.result_levels[i].type)
                .html(app.data.result_levels[i].description);
            break;
        };
    };
}


/**
 * Test if we can sitch to new set
 * @return {boolean} true or false
 */
app.canSwitchSet = function() {
    // if for current set all questions answered
    var can_switch = true;
    for (var i = 0; i < app.data.questions[app.status.current_set].length; i++) {
        // if any question not answered
        if (!app.data.questions[app.status.current_set][i].completed) {
            can_switch = false;
            // end loop
            break;
        }
    };

    // if we can switch
    if (can_switch) {
        // if thats the last set
        if (app.status.current_set + 1 >= app.data.questions.length) {
            // enable button for results
            app.result_button_parent.removeClass('disabled');
            app.next_set_button_parent.addClass('disabled');
        } else {
            // enable next set button if not enabled
            app.next_set_button_parent.removeClass('disabled');
        }

        return true;
    } else {
        return false;
    }
}


/**
 * Init dragg and drop
 */
app.initDragAndDrop = function() {
    var containers = [],
        // get all valid elements for drag & drop
        selected = $('.draggable-container, .answer-container');

    // for each selected element
    for (var i = 0; i < selected.length; i++) {
        // wrap nodes in array
        containers.push(selected[i]);
    };

    // and pass to plugin
    app.drag_controller = dragula(containers, {
        moves: function(el, source, handle, sibling) {
            // check if we want to drag element
            return app.checkIfAllawedToDrag(el, source);
        },
        accepts: function(el, target, source, sibling) {
            var target = $(target);

            // dont accept to be dropped to source container
            if (target.hasClass('draggable-container') || target.hasClass('answer-container--answered')) {
                return false;
            }

            var selector_to_seek = ".btn[data-answer='" + $(el).attr('data-answer') + "']";

            // dont accept if answer container have one answers of same type
            if ($(target.find(selector_to_seek)[0]).hasClass('btn-success')) {
                return false;
            }

            // none of above? lets accept
            return true;
        },
        invalid: function(el, target) {
            return false; // don't prevent any drags from initiating by default
        },
        direction: 'vertical', // Y axis is considered when determining where an element would be dropped
        copy: true, // elements are moved by default, not copied
        copySortSource: false, // elements in copy-source containers can be reordered
        revertOnSpill: true, // spilling will put the element back where it was dragged from, if this is true
        removeOnSpill: false, // spilling will `.remove` the element, if this is true
        mirrorContainer: document.body, // set the element that gets mirror elements appended
        ignoreInputTextSelection: true // allows users to select input text, see details below
    });

    // on drop
    app.drag_controller.on('drop', function(el, target, source, sibling) {
        app.checkIfQuestionAnswered(el, target, source);
    });

    // on over
    app.drag_controller.on('over', function(el, container, source) {
        // if container is an answer container
        var target = $(container);
        if (target.hasClass('answer-container')) {
            // color feedback
            target.addClass('hover');
        }
    });
    // on out
    app.drag_controller.on('out', function(el, container, source) {
        var target = $(container);
        if (target.hasClass('answer-container')) {
            // remove color feedback from all containers
            target.removeClass('hover');
        }
    });
}
