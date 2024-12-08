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
    title: 'The CMT',
    name: 'The CMT'
},
{
    url: 'key-contacts.html',
    title: 'Key Contacts',
    name: 'Key Contacts'
},
{
    url: 'call-tree.html',
    title: 'Call Tree',
    name: 'Call Tree'
},
{
    url: 'communication.html',
    title: 'Communication',
    name: 'Communication'
},
{
    url: 'network-diagram.html',
    title: 'Server Information',
    name: 'Server Information'
},
{
    url: 'network-diagram2.html',
    title: 'Network Diagram',
    name: 'Network Diagram'
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
            question: "<strong>Task One - Triage<br><br></strong>1. Locate the Crisis Management<br> Team", // question content
            description: "A serious issue has been identified with the SAN and Incident Management are unable to resolve it. Several major services have been unavailable to users for some time, and it’s now been pushed to Crisis Management.<br><br>The best course of action is to assemble the Crisis Management Team. Locate the contact details for the relevant people listed in the CMT section.", // question description
            correct_answers_count: 3, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "2. Dial in to the emergency<br> conference line",
            description: "Once the CMT is assembled, set up the emergency conference telephone line to keep the team connected throughout recovery. Set it up by dialling in to it via the communications section.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 2
            question: "3. Communicate with stakeholders and customers",
            description: "It’s important to keep customers and stakeholders informed early on. There are some pre-prepared messages in the communications section. Find the right ones and send them out to customers and stakeholders to notify them of interruption to service levels.",
            correct_answers_count: 2, // number of correct answers
            completed: false // if question completed true
        }, 
        ],
    [ // Set 1
        { // Question 0
            question: "<strong>Task Two - Restore the Environment<br><br></strong>4. Which essential servers are connected<br> to the SAN?",
            description: "Your SAN is the beating heart of your IT infrastructure and you need to assess which services are affected by its unavailability. Consult the network diagram to see which <i>essential servers</i> are affected, and list their internal network information below.",
            correct_answers_count: 6, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "5. Which CMT member is authorised to invoke DR?",
            description: "Your SAN was supporting a lot of vital systems for employees. They won’t be able to work effectively until those services are restored.<br><br>You need to contact your DR supplier and spin up those services in their recovery environment.<br><br>Who is the primary CMT member authorised to invoke DR?",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 2
            question: "6. Which 3 members of the IT team are authorised to call the DR provider?",
            description: "Now that failover has been signed off, there are three people authorised to make the call to the DR provider. Use the call tree to discover which members of the IT team are listed contacts for corresponding with the DR provider.",
            correct_answers_count: 3, // number of correct answers
            completed: false // if question completed true
        },
        ],
    [ // Set 2
        { // Question 0
            question: "<strong>Task Three - Maintain Business Continuity<br><br></strong>7. Which service needs a new external IP address?", // question content
            description: "The failover environment is now ready to use. However, one outwards-facing service requires a new external IP address before users can access it. Look at the network diagram to see which server requires an external IP address change.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "8. Get your users working again.",
            description: "Your technical preparation for the failover is complete. Now’s a good time to send some more communication to your users letting them know that access to crucial services will resume shortly.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 2
            question: "9. Update your customers that services will resume as normal",
            description: "Now that the failover is underway, it’s time to update your customers that normal services will resume shortly, and to apologise for any interruptions to regular services.",
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
        description: 'You had a difficult path to recovery this time. Always remember: the best course of action when facing disruption is to follow the run book as closely as possible. It’ll help keep your users productive, your customers well-informed and ensure regular contact with the CMT.<br><br>This simulation is designed to outline the operational and technical steps needed to recover from the immediacy of disruption. <br><br>In reality, once your essential systems are available to users again, the key stakeholders in your organisation would be faced with a series of decisions concerning your recovery priorities and your long-term strategy. <br><br>For instance, you’d need to determine the length of time between disruption and the recovery point in order to measure how much data had been lost. It’s then up to management to decide whether to accept its loss or re-input any lost work, potentially extending productivity disruption. <br><br>In reality, after failing over to your DR provider’s infrastructure, you’d be faced with a crucial choice: arrange a fail back to on-site infrastructure, or continue to run services using cloud-based resources. Doing so effectively turns the failover in to a migration, albeit under emergency circumstances. If you were considering IaaS adoption, now may be a good time to investigate that option more seriously.',
        type: 'bad' // color assigned
    },
    {
        from: 4,
        to: 7,
        title: 'Not bad',
        description: 'You recovered satisfactorily. There were a few mix-ups along the way – the best course of action when facing disruption is to follow the run book as closely as possible. Still, generally speaking, your users stayed productive, your customers were kept up to date, and you stayed in regular contact with the CMT.<br><br>This simulation is designed to outline the operational and technical steps needed to recover from the immediacy of disruption. <br><br>In reality, once your essential systems are available to users again, the key stakeholders in your organisation would be faced with a series of decisions concerning your recovery priorities and your long-term strategy. <br><br>For instance, you’d need to determine the length of time between disruption and the recovery point in order to measure how much data had been lost. It’s then up to management to decide whether to accept its loss or re-input any lost work, potentially extending productivity disruption. <br><br>In reality, after failing over to your DR provider’s infrastructure, you’d be faced with a crucial choice: arrange a fail back to on-site infrastructure, or continue to run services using cloud-based resources. Doing so effectively turns the failover in to a migration, albeit under emergency circumstances. If you were considering IaaS adoption, now may be a good time to investigate that option more seriously.',
        type: 'medium'
    },
    {
        from: 1,
        to: 3,
        title: 'Good job!',
        description: 'Well done! You followed the run book closely and recovered with very few errors. For the most part, your users stayed productive, your customers were well-informed and your standard of communication with the CMT was good.<br><br>This simulation is designed to outline the operational and technical steps needed to recover from the immediacy of disruption. <br><br>In reality, once your essential systems are available to users again, the key stakeholders in your organisation would be faced with a series of decisions concerning your recovery priorities and your long-term strategy. <br><br>For instance, you’d need to determine the length of time between disruption and the recovery point in order to measure how much data had been lost. It’s then up to management to decide whether to accept its loss or re-input any lost work, potentially extending productivity disruption. <br><br>In reality, after failing over to your DR provider’s infrastructure, you’d be faced with a crucial choice: arrange a fail back to on-site infrastructure, or continue to run services using cloud-based resources. Doing so effectively turns the failover in to a migration, albeit under emergency circumstances. If you were considering IaaS adoption, now may be a good time to investigate that option more seriously.',
        type: 'good'
    },
    {
        from: 0,
        to: 0,
        title: 'Perfect!',
        description: 'Great job! You followed the runbook the letter and recovered perfectly. Your users stayed as productive as possible, your customers were notified as the recovery progressed and your standard of communication with the CMT was excellent.<br><br>This simulation is designed to outline the operational and technical steps needed to recover from the immediacy of disruption. <br><br>In reality, once your essential systems are available to users again, the key stakeholders in your organisation would be faced with a series of decisions concerning your recovery priorities and your long-term strategy. <br><br>For instance, you’d need to determine the length of time between disruption and the recovery point in order to measure how much data had been lost. It’s then up to management to decide whether to accept its loss or re-input any lost work, potentially extending productivity disruption. <br><br>In reality, after failing over to your DR provider’s infrastructure, you’d be faced with a crucial choice: arrange a fail back to on-site infrastructure, or continue to run services using cloud-based resources. Doing so effectively turns the failover in to a migration, albeit under emergency circumstances. If you were considering IaaS adoption, now may be a good time to investigate that option more seriously.',
        type: 'good'
    },
    ];