@extends('layouts.app')

@section('content')
    <div class="v20-learning-pro" style="background: #0f172a; min-height: 100vh; color: #f8fafc;">
        <!-- 🎧 Top Navigation Bar -->
        <header class="d-flex justify-content-between align-items-center px-4 py-3"
            style="background: #1e293b; border-bottom: 1px solid rgba(255,255,255,0.05); position: sticky; top: 0; z-index: 1000;">
            <div class="d-flex align-items-center gap-4">
                <a href="{{ route('courses.show', $course->id) }}"
                    class="text-white opacity-75 hover-opacity-100 transition-all">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div class="ml-2">
                    <h6 class="mb-0 font-weight-bold" style="font-size: 1rem; color: #e2e8f0;">{{ $course->title }}</h6>
                    <span id="nowPlayingSub" class="small text-muted text-uppercase letter-spacing-1"
                        style="font-size: 0.65rem;">Now Playing: Module 01 - Introduction</span>
                </div>
            </div>
            <div class="d-flex align-items-center gap-4">
                <div class="d-none d-md-flex align-items-center mr-4">
                    <span class="small text-muted mr-2">12% Complete</span>
                    <div class="progress"
                        style="height: 6px; width: 120px; background: rgba(255,255,255,0.1); border-radius: 10px;">
                        <div class="progress-bar bg-maroon" style="width: 12%;"></div>
                    </div>
                </div>
                <button class="btn btn-maroon px-4 py-2" style="font-size: 0.85rem; border-radius: 50px;">Next
                    Lesson</button>
            </div>
        </header>

        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <!-- 📺 Cinematic Video Player Area -->
                <div class="col-lg-9">
                    <div class="v20-player-container position-relative"
                        style="background: #000; aspect-ratio: 16/9; box-shadow: 0 20px 50px rgba(0,0,0,0.5);">
                        <!-- 📽️ Guaranteed Academic Stream: Computer Science Foundations -->
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/zOjov-2OZ0E?autoplay=1&rel=0&modestbranding=1"
                            title="Course Video Player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="position: absolute; top:0; left:0;">
                        </iframe>
                    </div>

                    <div class="p-5" style="max-width: 900px; margin: 0 auto;">
                        <h2 id="currentLessonTitle" class="font-weight-bold mb-4" style="color: #fff;">01. Introduction to
                            the Program</h2>
                        <p class="lead opacity-75 mb-5" style="line-height: 1.8; color: #cbd5e1;">
                            In this first session, we lay the groundwork for your academic journey. We'll explore the core
                            methodologies and tools you'll be using throughout the semester. Ensure you have your workspace
                            set up as per the requirements module.
                        </p>

                        <div class="d-flex gap-4 p-4 rounded-lg mb-5"
                            style="background: #1e293b; border: 1px solid rgba(255,255,255,0.05);">
                            <div class="bg-maroon rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px; flex-shrink: 0;">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 font-weight-bold">Resources for this lesson</h6>
                                <p class="small text-muted mb-2">Lesson_Handout_V1.pdf (2.4 MB)</p>
                                <a href="#" class="text-maroon small font-weight-bold text-decoration-none">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 📂 Classroom Sidebar (Curriculum) -->
                <div class="col-lg-3"
                    style="background: #1e293b; height: calc(100vh - 73px); overflow-y: auto; border-left: 1px solid rgba(255,255,255,0.05);">
                    <div class="p-4 border-bottom border-secondary d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-uppercase letter-spacing-1"
                            style="font-size: 0.8rem; color: #94a3b8;">Course Content</h6>
                        <span class="badge bg-dark text-muted">14 Lessons</span>
                    </div>

                    <div class="v20-classroom-accordion" id="classroomAccordion">
                        @foreach($course->modules as $mIndex => $module)
                            <div class="module-group border-bottom border-secondary">
                                <div class="p-4 bg-dark bg-opacity-10 cursor-pointer d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#module{{ $mIndex }}" style="cursor: pointer;">
                                    <h6 class="m-0 small font-weight-bold text-white">{{ $module->title }}</h6>
                                    <i class="fas fa-chevron-down small opacity-50"></i>
                                </div>
                                <div id="module{{ $mIndex }}" class="collapse {{ $mIndex == 0 ? 'show' : '' }}"
                                    data-bs-parent="#classroomAccordion">
                                    @foreach($module->lessons as $lIndex => $lesson)
                                        <div class="lesson-row px-4 py-3 d-flex align-items-center gap-3 hover-bg-dark transition-all {{ $mIndex == 0 && $lIndex == 0 ? 'active-lesson bg-maroon bg-opacity-10' : '' }}"
                                            style="cursor: pointer;"
                                            onclick="changeLesson(this, '{{ $lesson->title }}', 'Module {{ sprintf('%02d', $mIndex + 1) }}')">
                                            <div class="status-icon">
                                                @if($mIndex == 0 && $lIndex == 0)
                                                    <i class="fas fa-play-circle text-maroon lesson-icon"></i>
                                                @else
                                                    <i class="far fa-circle opacity-25 lesson-icon"></i>
                                                @endif
                                            </div>
                                            <div>
                                                <div class="small font-weight-bold lesson-title-text" style="color: #e2e8f0;">
                                                    {{ $lesson->title }}</div>
                                                <div class="small opacity-50">12:45 • Video</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeLesson(element, title, module) {
            // Update active state in sidebar
            document.querySelectorAll('.lesson-row').forEach(row => {
                row.classList.remove('active-lesson', 'bg-maroon', 'bg-opacity-10');
                row.querySelector('.lesson-icon').className = 'far fa-circle opacity-25 lesson-icon';
            });

            element.classList.add('active-lesson', 'bg-maroon', 'bg-opacity-10');
            element.querySelector('.lesson-icon').className = 'fas fa-play-circle text-maroon lesson-icon';

            // Update UI Text
            document.getElementById('currentLessonTitle').innerText = title;
            document.getElementById('nowPlayingSub').innerText = 'Now Playing: ' + module + ' - ' + title;

            // Scroll to top of player for better UX
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>

    <style>
        .bg-maroon {
            background-color: #800000 !important;
        }

        .text-maroon {
            color: #800000 !important;
        }

        .btn-maroon {
            background: #800000;
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-maroon:hover {
            background: #600000;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(128, 0, 0, 0.3);
        }

        .hover-bg-dark:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .transition-all {
            transition: all 0.2s ease-in-out;
        }

        .letter-spacing-1 {
            letter-spacing: 1px;
        }

        .v20-player-container iframe {
            border: none;
        }

        /* 📱 Responsive Adjustments */
        @media (max-width: 991px) {
            .col-lg-3 {
                height: auto !important;
                border-left: none !important;
                border-top: 1px solid rgba(255, 255, 255, 0.05);
            }

            .p-5 {
                padding: 30px 20px !important;
            }

            header .d-flex.align-items-center.gap-4 {
                gap: 10px !important;
            }

            header h6 {
                font-size: 0.9rem !important;
                max-width: 150px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }

        @media (max-width: 767px) {
            header {
                padding: 10px 15px !important;
            }

            header .btn-maroon {
                padding: 8px 15px !important;
                font-size: 0.75rem !important;
            }

            #currentLessonTitle {
                font-size: 1.5rem !important;
            }

            .p-5 {
                padding: 25px 15px !important;
            }
        }
    </style>
@endsection