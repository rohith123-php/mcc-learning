<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Introduction to Computer Science',
                'category' => 'Programming',
                'level' => 'Beginner',
                'duration' => '8 Weeks',
                'image' => 'course_digital.png',
                'price' => 0.00,
                'instructor' => 'Dr. John Doe',
                'description' => 'A comprehensive introduction to computational thinking and fundamental programming concepts.',
                'learning_outcomes' => ['Understand basic logic', 'Algorithm design', 'Python syntax'],
                'modules' => [
                    ['title' => 'Phase 1: Computational Thinking', 'lessons' => ['Basics of Computing', 'History of OS', 'Hardware Interface']],
                    ['title' => 'Phase 2: Programming Fundamentals', 'lessons' => ['Variables & Constants', 'Data Types', 'Input/Output']],
                    ['title' => 'Phase 3: Control Flow Mastery', 'lessons' => ['Conditional Logic', 'Iterative Loops', 'Switch Cases']],
                    ['title' => 'Phase 4: Modular Programming', 'lessons' => ['Functions & Scopes', 'Parameters', 'Return Values']],
                    ['title' => 'Phase 5: Data Structures Intro', 'lessons' => ['Lists & Arrays', 'Tuples', 'Dictionaries']],
                    ['title' => 'Phase 6: Final Capstone', 'lessons' => ['Project Architecture', 'Debugging', 'Deployment']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Intro to Computational Thinking', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Binary & Logic Systems', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Module 1 Assessment', 'type' => 'Assignment'],
                    ['date' => '2026-08-10', 'topic' => 'Variable Scopes & Data Types', 'type' => 'Live Class'],
                    ['date' => '2026-08-12', 'topic' => 'Memory Management Deep Dive', 'type' => 'Recorded'],
                    ['date' => '2026-08-15', 'topic' => 'Mid-Term Capstone Planning', 'type' => 'Live Class'],
                    ['date' => '2026-08-18', 'topic' => 'Advanced Logic Structures', 'type' => 'Recorded'],
                    ['date' => '2026-08-21', 'topic' => 'Final Exam Orientation', 'type' => 'Live Class'],
                ]
            ],
            [
                'title' => 'Web Development Basics',
                'category' => 'Programming',
                'level' => 'Beginner',
                'duration' => '4 Weeks',
                'image' => 'student_study_1.png',
                'price' => 0.00,
                'instructor' => 'Sarah Smith',
                'description' => 'Learn to build responsive websites using HTML5, CSS3, and JavaScript.',
                'learning_outcomes' => ['HTML5 Semantic Structure', 'CSS3 Flexbox', 'JS Fundamentals'],
                'modules' => [
                    ['title' => 'Module 1: The Modern Web', 'lessons' => ['How Web Works', 'Browsers & Engines']],
                    ['title' => 'Module 2: Semantic HTML5', 'lessons' => ['Structure & Tags', 'Forms & Tables']],
                    ['title' => 'Module 3: Advanced CSS3', 'lessons' => ['Box Model', 'Flexbox mastery', 'Grid Layouts']],
                    ['title' => 'Module 4: Responsive Design', 'lessons' => ['Media Queries', 'Mobile First Approach']],
                    ['title' => 'Module 5: Interactive JS', 'lessons' => ['DOM Manipulation', 'Event Listeners']],
                    ['title' => 'Module 6: Final Deployment', 'lessons' => ['Hosting Basics', 'Git & GitHub']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'The Modern Web Ecosystem', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Semantic HTML5 Structuring', 'type' => 'Recorded'],
                    ['date' => '2026-08-06', 'topic' => 'CSS Box Model Workshop', 'type' => 'Live Class'],
                    ['date' => '2026-08-08', 'topic' => 'Flexbox & Grid Mastery', 'type' => 'Recorded'],
                    ['date' => '2026-08-11', 'topic' => 'Interactive UI with JS', 'type' => 'Live Class'],
                    ['date' => '2026-08-13', 'topic' => 'DOM Manipulation Lab', 'type' => 'Recorded'],
                    ['date' => '2026-08-15', 'topic' => 'Project Deployment Sync', 'type' => 'Live Class'],
                    ['date' => '2026-08-18', 'topic' => 'Final Portfolio Review', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Data Structures',
                'category' => 'Computer Science',
                'level' => 'Intermediate',
                'duration' => '10 Weeks',
                'image' => 'mcc_digital_lab.png',
                'price' => 499.00,
                'instructor' => 'Prof. Alan Turing',
                'description' => 'In-depth study of data organization and algorithm optimization.',
                'learning_outcomes' => ['Linked Lists & Trees', 'Sort Algorithms', 'Complexity Analysis'],
                'modules' => [
                    ['title' => 'Phase 1: Complexity Analysis', 'lessons' => ['Big O Notation', 'Space vs Time', 'Recursive Complexity']],
                    ['title' => 'Phase 2: Linear Structures', 'lessons' => ['Static Arrays', 'Linked Lists', 'Stacks & Queues']],
                    ['title' => 'Phase 3: Nonlinear Structures', 'lessons' => ['Trees & Forests', 'Binary Search Trees', 'Heaps']],
                    ['title' => 'Phase 4: Sorting & Searching', 'lessons' => ['Quick Sort', 'Merge Sort', 'Binary Search']],
                    ['title' => 'Phase 5: Graph Theory', 'lessons' => ['BFS & DFS', 'Shortest Paths', 'Min Spanning Tree']],
                    ['title' => 'Phase 6: Dynamic Programming', 'lessons' => ['Memoization', 'Tabulation', 'Optimality']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Big O Notation', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Array Implementations', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Complexity Quiz', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Database Management',
                'category' => 'Computer Science',
                'level' => 'Intermediate',
                'duration' => '8 Weeks',
                'image' => 'mcc_library_main.png',
                'price' => 999.00,
                'instructor' => 'Emma Watson',
                'description' => 'Design and manage relational databases using SQL.',
                'learning_outcomes' => ['SQL Mastery', 'Schema Design', 'Normalization'],
                'modules' => [
                    ['title' => 'Part 1: The Relational Model', 'lessons' => ['Relational Algebra', 'Schema Basics', 'Keys']],
                    ['title' => 'Part 2: SQL Fundamentals', 'lessons' => ['CRUD Operations', 'Joins & Unions', 'Aggregations']],
                    ['title' => 'Part 3: Database Design', 'lessons' => ['ER Modeling', 'Functional Dependencies', 'Normalization']],
                    ['title' => 'Part 4: Transaction Management', 'lessons' => ['ACID Properties', 'Concurrency', 'Recovery']],
                    ['title' => 'Part 5: NoSQL & Modern DBs', 'lessons' => ['Document Stores', 'Key-Value pairs', 'Scaling']],
                    ['title' => 'Part 6: Capstone DB Design', 'lessons' => ['System Design', 'Query Optimization', 'Admin Basics']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Database Design', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'SQL Setup', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Schema Task', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Digital Literacy Skills',
                'category' => 'Essential Skills',
                'level' => 'Beginner',
                'duration' => '4 Weeks',
                'image' => 'student_study_2.png',
                'price' => 29.00,
                'instructor' => 'David Miller',
                'description' => 'Enhance your digital productivity and online safety skills.',
                'learning_outcomes' => ['Online safety', 'Tool mastery', 'Information literacy'],
                'modules' => [
                    ['title' => 'Week 1: Online Safety', 'lessons' => ['Password Security', 'Phishing Detection']],
                    ['title' => 'Week 2: Productivity', 'lessons' => ['Cloud Storage', 'Collaboration Tools']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Digital Ethics', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Safety Tools', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Privacy Audit', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Graphic Design Fundamentals',
                'category' => 'Visual Design',
                'level' => 'Beginner',
                'duration' => '6 Weeks',
                'image' => 'course_digital.png',
                'price' => 499.00,
                'instructor' => 'Lisa Ray',
                'description' => 'Explore visual communication and color theory principles.',
                'learning_outcomes' => ['Color theory', 'Typography', 'Layout design'],
                'modules' => [
                    ['title' => 'Week 1: Color & Type', 'lessons' => ['Color Psychology', 'Font Pairing']],
                    ['title' => 'Week 2: Composition', 'lessons' => ['Hierarchy', 'Balance']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Visual Grammar', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Tool Basics', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Moodboard Creation', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Cyber Security Essentials',
                'category' => 'Essential Skills',
                'level' => 'Intermediate',
                'duration' => '8 Weeks',
                'image' => 'mcc_digital_lab.png',
                'price' => 999.00,
                'instructor' => 'Mark Wilson',
                'description' => 'Protect systems from cyber threats with advanced security protocols.',
                'learning_outcomes' => ['Penetration testing', 'Incident response', 'Security auditing'],
                'modules' => [
                    ['title' => 'Week 1: Threat Landscape', 'lessons' => ['Malware Types', 'Social Engineering']],
                    ['title' => 'Week 2: Defense', 'lessons' => ['Firewalls', 'VPNs']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Intro to Hacking', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Network Defense', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Packet Sniffing Task', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'UI/UX Design Principles',
                'category' => 'Visual Design',
                'level' => 'Beginner',
                'duration' => '6 Weeks',
                'image' => 'student_study_1.png',
                'price' => 499.00,
                'instructor' => 'Elena Gomez',
                'description' => 'Design user-centric interfaces with professional wireframing tools.',
                'learning_outcomes' => ['User research', 'Prototyping', 'Usability testing'],
                'modules' => [
                    ['title' => 'Week 1: UX Research', 'lessons' => ['User Interviews', 'Personas']],
                    ['title' => 'Week 2: UI Design', 'lessons' => ['Wireframing', 'Prototyping']],
                ],
                'schedules' => [
                    ['date' => '2026-08-01', 'topic' => 'Human Centered Design', 'type' => 'Live Class'],
                    ['date' => '2026-08-03', 'topic' => 'Figma Basics', 'type' => 'Recorded'],
                    ['date' => '2026-08-05', 'topic' => 'Wireframe Submit', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'PC Hardware Fundamentals',
                'category' => 'Computer Basics',
                'level' => 'Beginner',
                'duration' => '4 Weeks',
                'image' => 'mcc_library_main.png',
                'price' => 0.00,
                'instructor' => 'Mike Ross',
                'description' => 'Understand the internal components of a computer and how they work together.',
                'learning_outcomes' => ['Identify CPU/RAM', 'Storage types', 'Peripherals'],
                'modules' => [
                    ['title' => 'Week 1: Core Components', 'lessons' => ['Motherboards', 'Processors']],
                    ['title' => 'Week 2: Storage & Memory', 'lessons' => ['RAM vs SSD', 'External Drives']],
                ],
                'schedules' => [
                    ['date' => '2026-09-01', 'topic' => 'Hardware Intro', 'type' => 'Live Class'],
                    ['date' => '2026-09-03', 'topic' => 'Assembly Basics', 'type' => 'Recorded'],
                    ['date' => '2026-09-05', 'topic' => 'Hardware Quiz', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Operating Systems Mastery',
                'category' => 'Computer Basics',
                'level' => 'Beginner',
                'duration' => '6 Weeks',
                'image' => 'course_cloud.png',
                'instructor' => 'Rachel Zane',
                'description' => 'Learn to navigate and manage Windows, macOS, and Linux environments efficiently.',
                'learning_outcomes' => ['File management', 'System settings', 'Troubleshooting'],
                'modules' => [
                    ['title' => 'Week 1: Windows & macOS', 'lessons' => ['File Explorer', 'Finder Basics']],
                    ['title' => 'Week 2: Customization', 'lessons' => ['System Prefs', 'Personalization']],
                ],
                'schedules' => [
                    ['date' => '2026-09-10', 'topic' => 'OS Comparison', 'type' => 'Live Class'],
                    ['date' => '2026-09-12', 'topic' => 'File Systems', 'type' => 'Recorded'],
                    ['date' => '2026-09-14', 'topic' => 'OS Config Task', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Microsoft Office Productivity',
                'category' => 'Computer Basics',
                'level' => 'Beginner',
                'duration' => '8 Weeks',
                'image' => 'course_digital.png',
                'instructor' => 'Harvey Specter',
                'description' => 'Master Word, Excel, and PowerPoint for professional workplace productivity.',
                'learning_outcomes' => ['Excel formulas', 'Word formatting', 'PPT design'],
                'modules' => [
                    ['title' => 'Week 1: Word Processing', 'lessons' => ['Document Creation', 'Layouts']],
                    ['title' => 'Week 2: Spreadsheets', 'lessons' => ['Basic Formulas', 'Charts']],
                ],
                'schedules' => [
                    ['date' => '2026-09-20', 'topic' => 'Office Overview', 'type' => 'Live Class'],
                    ['date' => '2026-09-22', 'topic' => 'Excel Deep Dive', 'type' => 'Recorded'],
                    ['date' => '2026-09-24', 'topic' => 'Resume Project', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Internet & Cloud Computing',
                'category' => 'Computer Basics',
                'level' => 'Beginner',
                'duration' => '5 Weeks',
                'image' => 'course_network.png',
                'instructor' => 'Donna Paulsen',
                'description' => 'Understanding web browsers, cloud storage, and online collaboration tools.',
                'learning_outcomes' => ['Cloud storage usage', 'Email etiquette', 'Online safety'],
                'modules' => [
                    ['title' => 'Week 1: Web Browsing', 'lessons' => ['Search Engines', 'Security']],
                    ['title' => 'Week 2: Cloud Services', 'lessons' => ['Google Drive', 'OneDrive']],
                ],
                'schedules' => [
                    ['date' => '2026-10-01', 'topic' => 'Internet Basics', 'type' => 'Live Class'],
                    ['date' => '2026-10-03', 'topic' => 'Cloud Storage', 'type' => 'Recorded'],
                    ['date' => '2026-10-05', 'topic' => 'Collab Task', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Introduction to Digital Skills',
                'category' => 'Basics',
                'level' => 'Beginner',
                'duration' => '3 Weeks',
                'image' => 'course_digital.png',
                'instructor' => 'Jessica Pearson',
                'description' => 'Foundational skills for the digital age, covering basic computer usage and online safety.',
                'learning_outcomes' => ['Mouse & Keyboard', 'Browser basics', 'Safety'],
                'modules' => [
                    ['title' => 'Week 1: Hardare Basics', 'lessons' => ['Input Devices', 'Output Devices']],
                    ['title' => 'Week 2: Software Basics', 'lessons' => ['Apps vs OS', 'Installations']],
                ],
                'schedules' => [
                    ['date' => '2026-11-01', 'topic' => 'Digital Intro', 'type' => 'Live Class'],
                    ['date' => '2026-11-03', 'topic' => 'Safe Surfing', 'type' => 'Recorded'],
                    ['date' => '2026-11-05', 'topic' => 'Basics Quiz', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Basic Mathematics for Computing',
                'category' => 'Basics',
                'level' => 'Beginner',
                'duration' => '6 Weeks',
                'image' => 'course_cs.png',
                'instructor' => 'Louis Litt',
                'description' => 'Essential math concepts needed for programming and logical thinking.',
                'learning_outcomes' => ['Binary math', 'Logic gates', 'Set theory'],
                'modules' => [
                    ['title' => 'Week 1: Number Systems', 'lessons' => ['Binary', 'Hexadecimal']],
                    ['title' => 'Week 2: Set Theory', 'lessons' => ['Unions', 'Intersections']],
                ],
                'schedules' => [
                    ['date' => '2026-11-10', 'topic' => 'Math for Devs', 'type' => 'Live Class'],
                    ['date' => '2026-11-12', 'topic' => 'Logic Gates', 'type' => 'Recorded'],
                    ['date' => '2026-11-14', 'topic' => 'Math Quiz', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Communication Skills',
                'category' => 'Basics',
                'level' => 'Beginner',
                'duration' => '4 Weeks',
                'image' => 'course_digital.png',
                'instructor' => 'Katrina Bennett',
                'description' => 'Improve your verbal and written communication for professional environments.',
                'learning_outcomes' => ['Email writing', 'Public speaking', 'Listening'],
                'modules' => [
                    ['title' => 'Week 1: Written Comm', 'lessons' => ['Formal Emails', 'Reports']],
                    ['title' => 'Week 2: Verbal Comm', 'lessons' => ['Presentations', 'Interviews']],
                ],
                'schedules' => [
                    ['date' => '2026-11-20', 'topic' => 'Effective Comm', 'type' => 'Live Class'],
                    ['date' => '2026-11-22', 'topic' => 'Soft Skills', 'type' => 'Recorded'],
                    ['date' => '2026-11-24', 'topic' => 'Presentation', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Problem Solving Techniques',
                'category' => 'Basics',
                'level' => 'Beginner',
                'duration' => '5 Weeks',
                'image' => 'course_python.png',
                'instructor' => 'Alex Williams',
                'description' => 'Learn systematic approaches to solving complex problems efficiently.',
                'learning_outcomes' => ['Flowcharts', 'Pseudocode', 'Critical thinking'],
                'modules' => [
                    ['title' => 'Week 1: Deconstruction', 'lessons' => ['Breaking down problems', 'Abstraction']],
                    ['title' => 'Week 2: Algorithms', 'lessons' => ['Step by step', 'Efficiency']],
                ],
                'schedules' => [
                    ['date' => '2026-12-01', 'topic' => 'Critical Thinking', 'type' => 'Live Class'],
                    ['date' => '2026-12-03', 'topic' => 'Logic Patterns', 'type' => 'Recorded'],
                    ['date' => '2026-12-05', 'topic' => 'Logic Task', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Advanced Photoshop Techniques',
                'category' => 'Design',
                'level' => 'Advanced',
                'duration' => '8 Weeks',
                'image' => 'course_design.png',
                'instructor' => 'Samantha Wheeler',
                'description' => 'Master complex photo manipulation, retouching, and digital painting.',
                'learning_outcomes' => ['Compositing', 'Masking', 'Color grading'],
                'modules' => [
                    ['title' => 'Week 1: Compositing', 'lessons' => ['Smart Objects', 'Blend Modes']],
                    ['title' => 'Week 2: Retouching', 'lessons' => ['Skin tones', 'Liquify']],
                ],
                'schedules' => [
                    ['date' => '2027-01-05', 'topic' => 'Digital Art', 'type' => 'Live Class'],
                    ['date' => '2027-01-07', 'topic' => 'Brushes', 'type' => 'Recorded'],
                    ['date' => '2027-01-09', 'topic' => 'Art Project', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Vector Illustration with Illustrator',
                'category' => 'Design',
                'level' => 'Intermediate',
                'duration' => '6 Weeks',
                'image' => 'course_uiux.png',
                'instructor' => 'Gretchen Bodinski',
                'description' => 'Create scalable vector graphics, logos, and icons using Adobe Illustrator.',
                'learning_outcomes' => ['Pen tool mastery', 'Logo design', 'Typography'],
                'modules' => [
                    ['title' => 'Week 1: Paths & Shapes', 'lessons' => ['Pen Tool', 'Pathfinder']],
                    ['title' => 'Week 2: Typography', 'lessons' => ['Type tool', 'Outlines']],
                ],
                'schedules' => [
                    ['date' => '2027-01-15', 'topic' => 'Vector Basics', 'type' => 'Live Class'],
                    ['date' => '2027-01-17', 'topic' => 'Logo Creation', 'type' => 'Recorded'],
                    ['date' => '2027-01-19', 'topic' => 'Icon Set', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Design Thinking Workshop',
                'category' => 'Design',
                'level' => 'Beginner',
                'duration' => '4 Weeks',
                'image' => 'course_uiux.png',
                'instructor' => 'Robert Zane',
                'description' => 'A human-centered approach to innovation that integrates the needs of people.',
                'learning_outcomes' => ['Empathy mapping', 'Ideation', 'Prototyping'],
                'modules' => [
                    ['title' => 'Week 1: Empathy', 'lessons' => ['User Interviews', 'Mapping']],
                    ['title' => 'Week 2: Ideation', 'lessons' => ['Brainstorming', 'Selection']],
                ],
                'schedules' => [
                    ['date' => '2027-02-01', 'topic' => 'UX Strategy', 'type' => 'Live Class'],
                    ['date' => '2027-02-03', 'topic' => 'User Journey', 'type' => 'Recorded'],
                    ['date' => '2027-02-05', 'topic' => 'UX Audit', 'type' => 'Assignment'],
                ]
            ],
            [
                'title' => 'Brand Identity Design',
                'category' => 'Design',
                'level' => 'Intermediate',
                'duration' => '7 Weeks',
                'image' => 'course_design.png',
                'instructor' => 'Sheila Sazs',
                'description' => 'Learn to create cohesive visual identities including logos, palettes, and guidelines.',
                'learning_outcomes' => ['Brand strategy', 'Visual systems', 'Style guides'],
                'modules' => [
                    ['title' => 'Week 1: Research', 'lessons' => ['Brand Audit', 'Moodboards']],
                    ['title' => 'Week 2: Identity', 'lessons' => ['Logo variants', 'Color systems']],
                ],
                'schedules' => [
                    ['date' => '2027-02-10', 'topic' => 'Identity Systems', 'type' => 'Live Class'],
                    ['date' => '2027-02-12', 'topic' => 'Color Theory', 'type' => 'Recorded'],
                    ['date' => '2027-02-14', 'topic' => 'Brand Guide', 'type' => 'Assignment'],
                ]
            ],
        ];

        foreach ($courses as $cData) {
            $modules = $cData['modules'];
            $schedules = $cData['schedules'];
            unset($cData['modules'], $cData['schedules']);

            $course = \App\Models\Course::create($cData);

            foreach ($modules as $mIndex => $mData) {
                $lessons = $mData['lessons'];
                unset($mData['lessons']);
                $mData['order'] = $mIndex;
                $module = $course->modules()->create($mData);

                foreach ($lessons as $lIndex => $lTitle) {
                    $module->lessons()->create([
                        'title' => $lTitle,
                        'order' => $lIndex,
                        'video_link' => 'https://example.com/video',
                    ]);
                }
            }

            foreach ($schedules as $sData) {
                $course->schedules()->create($sData);
            }

            $course->assignments()->create([
                'title' => 'Initial Diagnostic Quiz: Fundamental Concepts',
                'due_date' => now()->addDays(7),
            ]);

            $course->assignments()->create([
                'title' => 'Phase 1 & 2 Assessment: Logic & Structure',
                'due_date' => now()->addWeeks(2),
            ]);

            $course->assignments()->create([
                'title' => 'Mid-Term Technical Review: Case Study Analysis',
                'due_date' => now()->addWeeks(4),
            ]);

            $course->assignments()->create([
                'title' => 'Final Capstone Project: Industry Implementation',
                'due_date' => now()->addWeeks(8),
            ]);
        }
    }
}
