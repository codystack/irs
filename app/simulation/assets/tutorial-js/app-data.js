/**
 * App data - separated from app logic for sake of beauty & maintainability
 */

// List of all pages to load to booklet - order on this list is preserved in app
app.data.booklet = [
{
    url: 'front-page.html',
    title: 'Front Page',
    name: 'Home'
},
{
    url: 'executive.html',
    title: 'Executive Summary',
    name: 'Executive Summary'
},
{
    url: 'contents.html',
    title: 'Contents',
    name: 'Contents'
},
{
    url: 'invoking-dr.html',
    title: 'Invoking Disaster Recovery',
    name: 'Invoking DR'
},
{
    url: 'key-contacts.html',
    title: 'Key Contacts',
    name: 'Key Contacts'
},
{
    url: 'communication.html',
    title: 'Communication',
    name: 'Communication'
},
{
    url: 'network-diagram.html',
    title: 'Service Information',
    name: 'Service Information'
}, 
{
    url: 'r-locations.html',
    title: 'Recovery Locations',
    name: 'Recovery Locations'
},
{
    url: 'r-templates.html',
    title: 'Recovery Template',
    name: 'Recovery Template'
}
];

// Each set is marked with unique id starting at 0 e.g. "0", "1" ... "1224".
//
// Each question is marked with unique id containing its set it and its own
// unique number starting from 0 e.g. "0-0", "0-1" ... "0-26544".
//
// Each answer is marked with unique id containing its set, answer and its own
// unique number starting from 0 e.g. "0-0-0", "0-0-1" ... "0-0-5643".
//
app.data.questions = [
    [ // Set 0
        { // Question 0
            question: "<strong>Task One - Triage<br><br></strong>1.   Find the designated assembly<br> point to evacuate all staff.", // question content
            description: "Everything was fine, and then it wasn’t.<br><br> It started with a weird smell. Then hot smoke spilling out from the server room. Now the alarms are going off and you need evacuate to get everyone to a safe place. Find the designated Fire Assembly Point in the runbook.", // question description
            hint: "", // hint on wrong answer
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "2.   Find the contact number for the<br> emergency services",
            description: "Now that there’s no longer any immediate danger of harm or injury, call the emergency services to handle the fire.",
            hint: "",
            correct_answers_count: 1,
            completed: false
        }, { // Question 2
            question: "3.   Assemble the Crisis Management<br> Team",
            description: "3.    Phew. OK. Now your staff are in no immediate danger and the disaster is being handled by emergency services, it’s up to the Crisis Management Team to start the process of recovery.<br><br> First, they need to be called together. Find the relevant contacts in the runbook and drag their phone numbers from the Key Contacts section.",
            hint: "",
            correct_answers_count: 3,
            completed: false
        },
    ],
    [ // Set 1
        { // Question 0
            question: "<strong>Task Two - Maintain Business Continuity<br><br></strong>4.   Relocate staff to the recovery<br> suite office",
            description: "Relationship management is a huge part of Crisis Management. Unfortunately, the fire has displaced the workforce from the communication channels they need to keep customers and the supply chain informed throughout the disruption.<br><br>Fortunately, the organisation keeps a fully-equipped recovery suite on retainer. Find the location in the runbook to relocate your employees and keep them productive.",
            hint: "",
            correct_answers_count: 1,
            completed: false
        }, { // Question 1
            question: "5.   Find the emergency phone line<br> message and contact your Communications<br> Provider to reroute the phones",
            description: "Your staff can now begin sending out important information to customers and the supply chain from the recovery suite as required. However, it might also be useful to set up an automated message whilst you redirect inbound communications to the new premises.<br><br>Find and set up the emergency phone line message, and call your communications provider in order to reroute the phone lines to the recovery suite.",
            hint: "",
            correct_answers_count: 2,
            completed: false
        },
    ],
    [ // Set 2
        { // Question 0
            question: "<strong>Task Three - Resolution<br><br></strong>7.   Call Disaster Recovery Supplier", // question content
            description: "Now it’s time to get your employees connected to the IT services they need in order to keep the business operational and minimise disruption for customers and the supply chain.<br><br>We’ll go into the details of what this process looks like in subsequent simulations. For now, simply call your DR supplier to begin the failover process.", // question description
            hint: "", // hint on wrong answer
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        },
    ]
];


// List of all result levels
app.data.result_levels = [
{
        from: 8, // bottom score
        to: 1000, // top score
        title: 'Uh-oh...', // label assigned
        description: 'You had a difficult path to recovery this time. Always remember: the best course of action when facing disruption is to follow the run book as closely as possible. It’ll help keep your users productive, your customers well-informed and ensure regular contact with the CMT.<br><br>Preserving human safety should always be your priority in disaster situations that pose a physical threat.<br><br>Once everyone is secure, it’s important to carefully manage communications with your customers and suppliers in order to minimise any potential disruption they may experience and guide their expectations of recovery.<br><br>In the next two simulations we’ll take a more in-depth look at restore access to IT systems by failing over to an externally-hosted recovery environment, using a DR provider.', // description
        type: 'bad' // color assigned
    },
    {
        from: 4,
        to: 7,
        title: 'Not bad',
        description: 'You recovered satisfactorily. There were a few mix-ups along the way – the best course of action when facing disruption is to follow the run book as closely as possible. Still, generally speaking, your users stayed productive, your customers were kept up to date, and you stayed in regular contact with the CMT.<br><br>Preserving human safety should always be your priority in disaster situations that pose a physical threat.<br><br>Once everyone is secure, it’s important to carefully manage communications with your customers and suppliers in order to minimise any potential disruption they may experience and guide their expectations of recovery.<br><br>In the next two simulations we’ll take a more in-depth look at restore access to IT systems by failing over to an externally-hosted recovery environment, using a DR provider.', // description
        type: 'medium'
    },
    {
        from: 1,
        to: 3,
        title: 'Great job!',
        description: 'Well done! You followed the run book closely and recovered with very few errors. For the most part, your users stayed productive, your customers were well-informed and your standard of communication with the CMT was good.<br><br>Preserving human safety should always be your priority in disaster situations that pose a physical threat.<br><br>Once everyone is secure, it’s important to carefully manage communications with your customers and suppliers in order to minimise any potential disruption they may experience and guide their expectations of recovery.<br><br>In the next two simulations we’ll take a more in-depth look at restore access to IT systems by failing over to an externally-hosted recovery environment, using a DR provider.', // description
        type: 'good'
    },
    {
        from: 0,
        to: 0,
        title: 'Perfect!',
        description: 'Great job! You followed the runbook the letter and recovered perfectly. Your users stayed as productive as possible, your customers were notified as the recovery progressed and your standard of communication with the CMT was excellent.<br><br>Preserving human safety should always be your priority in disaster situations that pose a physical threat.<br><br>Once everyone is secure, it’s important to carefully manage communications with your customers and suppliers in order to minimise any potential disruption they may experience and guide their expectations of recovery.<br><br>In the next two simulations we’ll take a more in-depth look at restore access to IT systems by failing over to an externally-hosted recovery environment, using a DR provider.', // description
        type: 'good'
    },
];