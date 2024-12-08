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
    url: 'actions.html',
    title: 'Actions',
    name: 'Actions'
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
            question: "<strong>Task One - Triage<br><br></strong>1. Which server should you take offline in order to isolate the problem?", // question content
            hint: "Find the infected server VM in the network diagram.",
            description: "Complaints from your users suggest a VM has been exposed to malware. There was a spike in IOPs on the file server at around 10:45am, and users are having difficulty opening certain documents. Find the affected VM in the network diagram and server information pages.", // question description
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "2. <strong>Test</strong> your essential services in order to determine if they’re affected.",
            hint: "Find the “Test” action and list the unaffected VMs.",
            description: "Running tests on the file server revealed a huge spike in IOPs. You need to test your other essential IT services to make sure they’re running normally. Go to the new “Actions” page to find the “Test” function and select your other “essential services”.",
            correct_answers_count: 6, // number of correct answers
            completed: false // if question completed true
        }, { // Question 2
            question: "3. Create an incident and send the<br> relevant email to employees in the communications section.",
            hint: "Find the “Create incident” and and let your users know that you’re working towards resolve the problem.",
            description: "It looks like the rest of the services are operating normally. Now would be a good time to log an incident and let the workforce know they won’t be able to access their files until the issue is resolved.",
            correct_answers_count: 2, // number of correct answers
            completed: false // if question completed true
        }, { // Question 3
            question: "4. What action should you take in order to diagnose the environment?",
            hint: "A Malware Scan is an action.",
            description: "<strong>Running a malware scan</strong> is the best way to diagnose the nature and origin of the problem, now that the file server has been isolated.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 4
            question: "5. Disconnect your backup<br> processes.",
            hint: "Select the disconnect action and choose the backup appliance.",
            description: "You find the file server has been hit by a ransomware attack. Your file data has been encrypted and is being held to ransom.<br><br>Your best chance of recovery is to restore from unencrypted backup data. First, you need to stop the encryption spreading to your backups by <strong>disconnecting</strong> the backup appliance.",
            correct_answers_count: 2, // number of correct answers
            completed: false // if question completed true
        }, 
        ],
    [ // Set 1
        { // Question 0
            question: "<strong>Task Two - Maintain Business Continuity<br><br></strong>6. Who is authorised to invoke failover<br> and who should they call?",
            hint: "Find contact information for your DR provider and the authorised DR contact as outlined in the CMT section.",
            description: "Your on-site SAN doesn’t have enough capacity to restore your file server from backups. You need to call your 3rd party DR provider and failover to a hosted server. Find the person authorised to failover in the CMT section, and the number for your 3rd party DR provider.",
            correct_answers_count: 2, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "7. Which snapshot should you use to restore the hosted file server?",
            hint: "Select the most recent snapshot before the incident to reduce work lost.",
            description: "There are hourly backup snapshots you can use to populate the new externally-hosted file server. If the logs show the file server IOPs start spiking at 10:45am, which one should you tell your DR provider to restore from?",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 2
            question: "8.<strong>Failover</strong> the file server.",
            hint: "Select the “Failover” option from the Actions page.",
            description: "Now that you’ve selected a snapshot, you’re ready to fail the file server over to your DR provider’s environment.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 3
            question: "9. Inform staff of resumed access to the file server.",
            hint: "Update your employees via email.",
            description: "Now the externally-hosted file server is online, you can update the workforce that access to their data has resumed.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        },
        ],
    [ // Set 2
        { // Question 0
            question: "<strong>Task Three - Resolution<br><br></strong>10. Call your hardware provider to<br> order a new file server.", // question content
            hint: "Find contact details from your hardware provider in the Key Contacts section.",
            description: "Your users can now access the file server data, hosted on your DR provider’s cloud. You can run this network configuration for as long as needed - you may decide to continue hosting your file server in the cloud indefinitely.<br><br>However, given how bandwidth intensive accessing large files can be, it makes sense to order a new file server from your hardware provider.",
            correct_answers_count: 1, // number of correct answers
            completed: false // if question completed true
        }, { // Question 1
            question: "11. Select the authorised DR contact and warn users about downtime.",
            hint: "Find contact details in the Key Contacts section and user messsage in the Communication section.",
            description: "After your file server is installed, you must authorise the failback with the named contact, as with the failover. You should also send another email to users, informing them to expect downtime during the process.",
            correct_answers_count: 2, // number of correct answers
            completed: false // if question completed true
        }, { // Question 2
            question: "12. Call your DR provider and failback the file server.",
            hint: "Select the “Failback” option from the Actions page.",
            description: "Now the failover has been authorised it’s time to make it happen. Call your DR provider to schedule in downtime and begin the failback. This process essentially reverses the direction of replication, failing your file data back to the new on-site hardware.",
            correct_answers_count: 3, // number of correct answers
            completed: false // if question completed true
        },
        ]
        ];


// List of all result levels
app.data.result_levels = [
{
        from: 8, // bottom score
        to: 100, // top score
        title: 'Uh-oh...', // label assigned
        description: 'You had a difficult path to recovery this time. Always remember: the best course of action when facing disruption is to follow the runbook as closely as possible. It’ll help keep your users productive, your customers well-informed and ensure regular contact with the CMT.<br><br>Many cyber-attacks, particularly ransomware, are designed to leave you feeling helpless, and without options. This is seldom the case.<br><br>With a carefully-managed backup strategy and assistance from a 3rd party disaster recovery provider, you can effectively neutralise the effects of ransomware attacks with little impact to continuity, and avoiding the cost of retrieval.<br><br>As with the SAN failure, failing elements of infrastructure over to cloud-based hosting environments does not have to be a temporary arrangement, as failover is functionally similar to migration. However, in this instance, it makes sense to fail back to onsite architecture, given the usage patterns and performance requirements associated with a large file server.', // description
        type: 'bad' // color assigned
    },
    {
        from: 4,
        to: 7,
        title: 'Not bad',
        description: 'You recovered satisfactorily. There were a few mix-ups along the way – the best course of action when facing disruption is to follow the runbook as closely as possible. Still, generally speaking, your users stayed productive, your customers were kept up to date, and you stayed in regular contact with the CMT.<br><br>Many cyber-attacks, particularly ransomware, are designed to leave you feeling helpless, and without options. This is seldom the case.<br><br>With a carefully-managed backup strategy and assistance from a 3rd party disaster recovery provider, you can effectively neutralise the effects of ransomware attacks with little impact to continuity, and avoiding the cost of retrieval.<br><br>As with the SAN failure, failing elements of infrastructure over to cloud-based hosting environments does not have to be a temporary arrangement, as failover is functionally similar to migration. However, in this instance, it makes sense to fail back to onsite architecture, given the usage patterns and performance requirements associated with a large file server.', // description
        type: 'medium'
    },
    {
        from: 1,
        to: 3,
        title: 'Good job!',
        description: 'Well done! You followed the runbook closely and recovered with very few errors. For the most part, your users stayed productive, your customers were well-informed and your standard of communication with the CMT was good.<br><br>Many cyber-attacks, particularly ransomware, are designed to leave you feeling helpless, and without options. This is seldom the case.<br><br>With a carefully-managed backup strategy and assistance from a 3rd party disaster recovery provider, you can effectively neutralise the effects of ransomware attacks with little impact to continuity, and avoiding the cost of retrieval.<br><br>As with the SAN failure, failing elements of infrastructure over to cloud-based hosting environments does not have to be a temporary arrangement, as failover is functionally similar to migration. However, in this instance, it makes sense to fail back to onsite architecture, given the usage patterns and performance requirements associated with a large file server.', // description
        type: 'good'
    },
    {
        from: 0,
        to: 0,
        title: 'Perfect!',
        description: 'Great job! You followed the runbook to the letter and recovered perfectly. Your users stayed as productive as possible, your customers were notified as the recovery progressed and your standard of communication with the CMT was excellent.<br><br>Many cyber-attacks, particularly ransomware, are designed to leave you feeling helpless, and without options. This is seldom the case.<br><br>With a carefully-managed backup strategy and assistance from a 3rd party disaster recovery provider, you can effectively neutralise the effects of ransomware attacks with little impact to continuity, and avoiding the cost of retrieval.<br><br>As with the SAN failure, failing elements of infrastructure over to cloud-based hosting environments does not have to be a temporary arrangement, as failover is functionally similar to migration. However, in this instance, it makes sense to fail back to onsite architecture, given the usage patterns and performance requirements associated with a large file server.', // description
        type: 'good'
    },
    ];