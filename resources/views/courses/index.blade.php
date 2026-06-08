@extends('layouts.app')

@section('content')
    <div class="courses-portal">
        <!-- 🏔️ Cinematic Courses Hero -->
        <section class="course-hero pt-2 pb-5" style="background: linear-gradient(rgba(128, 0, 0, 0.9), rgba(74, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; min-height: 350px; display: flex; align-items: center; color: white; margin-top: 0;">
            <div class="container text-center animate__animated animate__fadeIn">
                <span class="badge mb-3 p-2 px-4" style="background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.3); color: white; border-radius: 50px; text-transform: uppercase; letter-spacing: 2px; font-size: 0.75rem; font-weight: 700;">
                    Academic Excellence
                </span>
                <h1 class="display-3 mb-4" style="font-family: 'Playfair Display', serif; font-weight: 900; letter-spacing: -1px;">Empower Your Future</h1>
                <p class="lead mb-0" style="font-size: 1.25rem; opacity: 0.9; font-weight: 500;">
                    Unlock your potential with our university-grade digital courses.
                </p>
            </div>
        </section>

        <!-- 🔍 Integrated Search & Filter Bar -->
        <div class="container" style="margin-top: -45px; position: relative; z-index: 10;">
            <div class="bg-white p-2 shadow-lg" style="border-radius: 100px;">
                <div class="d-flex align-items-center px-2">
                    <!-- Search Input -->
                    <div class="flex-grow-1 d-flex align-items-center px-3">
                        <i class="fas fa-search mr-3" style="color: #800000; font-size: 1.1rem;"></i>
                        <input type="text" class="form-control border-0 shadow-none" 
                            placeholder="What do you want to learn today?" 
                            style="font-size: 1rem; color: #64748b; background: transparent;">
                    </div>

                    <!-- Dropdowns in Pills -->
                    <div class="d-flex gap-2 me-2" style="gap: 10px;">
                        <div class="dropdown-pill position-relative" id="categoryDropdown">
                            <div class="d-flex align-items-center justify-content-between px-4 py-2" style="width: 180px; cursor: pointer;" onclick="toggleMenu('categoryMenu')">
                                <span id="selectedCategory" style="font-weight: 700; font-size: 0.85rem; color: #1e293b;">Categories</span>
                                <i class="fas fa-chevron-down" style="font-size: 0.7rem; color: #1e293b;"></i>
                            </div>
                            <ul class="custom-dropdown-menu list-unstyled m-0" id="categoryMenu">
                                <li onclick="selectItem('Categories', 'selectedCategory', 'categoryMenu')">Categories</li>
                                <li onclick="selectItem('Programming', 'selectedCategory', 'categoryMenu')">Programming</li>
                                <li onclick="selectItem('Computer Basics', 'selectedCategory', 'categoryMenu')">Computer Basics</li>
                                <li onclick="selectItem('Basics', 'selectedCategory', 'categoryMenu')">Basics</li>
                                <li onclick="selectItem('Design', 'selectedCategory', 'categoryMenu')">Design</li>
                            </ul>
                        </div>
                        <div class="dropdown-pill">
                            <select class="form-select border-0 shadow-none bg-transparent py-2 ps-4 pe-5" style="font-weight: 700; font-size: 0.85rem; color: #1e293b; width: 140px;">
                                <option selected>Difficulty</option>
                                <option>Beginner</option>
                                <option>Advanced</option>
                            </select>
                        </div>
                    </div>

                    <!-- Reset Button -->
                    <button class="btn p-0 d-flex align-items-center justify-content-center" 
                        onclick="resetFilters()"
                        style="width: 42px; height: 42px; background: #800000; border-radius: 50%; color: white; border: none;">
                        <i class="fas fa-undo-alt" style="font-size: 0.9rem;"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- 🏷️ Specialty Filters -->
        <section class="py-5">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 12px;">
                    <a href="#" class="filter-pill active">All Specialties</a>
                    <a href="#" class="filter-pill">Programming</a>
                    <a href="#" class="filter-pill">Computer Science</a>
                    <a href="#" class="filter-pill">Visual Design</a>
                    <a href="#" class="filter-pill">Essential Skills</a>
                </div>

                <!-- 📚 Courses Grid -->
                <div class="row g-4" id="coursesGrid">
                    @foreach ($courses as $course)
                        <div class="col-lg-3 col-md-6 mb-4 course-item" 
                            data-category="{{ strtolower($course->category) }}" 
                            data-title="{{ strtolower($course->title) }}"
                            data-difficulty="{{ strtolower($course->difficulty ?? 'beginner') }}">
                            <div class="card border-0 shadow-sm h-100 course-card"
                                style="border-radius: 20px; overflow: hidden; background: white; transition: 0.3s; border: 1px solid #f1f5f9;">
                                <!-- Course Image -->
                                <div class="course-img-box" style="height: 180px; overflow: hidden;">
                                    <img src="{{ asset('images/' . ($course->image ?? 'course_digital.png')) }}"
                                        class="card-img-top w-100 h-100" style="object-fit: cover;">
                                </div>

                                <div class="card-body p-4 d-flex flex-column">
                                    <!-- Category & Rating -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="badge" style="background: #fff1f2; color: #800000; padding: 6px 14px; border-radius: 50px; font-size: 0.65rem; font-weight: 800; letter-spacing: 1px; text-transform: uppercase;">
                                            {{ $course->category }}
                                        </span>
                                        <span class="small font-weight-bold" style="color: #1e293b;">
                                            <i class="fas fa-star" style="color: #1e293b; font-size: 0.75rem;"></i> 4.8
                                        </span>
                                    </div>

                                    <!-- Title & Description -->
                                    <h5 class="font-weight-bold mb-3 text-center" style="color: #1e293b; font-size: 1.15rem; line-height: 1.3;">
                                        {{ $course->title }}
                                    </h5>
                                    <p class="text-muted mb-4 text-center" style="font-size: 0.85rem; line-height: 1.6;">
                                        {{ Str::limit($course->description ?? 'Learn industry-standard skills with our university-grade digital courses and expert faculty.', 100) }}
                                    </p>

                                    <!-- Stats: Students & Duration -->
                                    <div class="d-flex justify-content-center gap-4 mb-4 pb-4 border-bottom" style="gap: 20px;">
                                        <div class="small font-weight-bold" style="color: #1e293b;">
                                            <i class="fas fa-users mr-1" style="color: #800000;"></i> 1.2k+
                                        </div>
                                        <div class="small font-weight-bold" style="color: #1e293b;">
                                            <i class="fas fa-clock mr-1" style="color: #800000;"></i> {{ $course->duration ?? '8 Weeks' }}
                                        </div>
                                    </div>
                                    
                                    <!-- Footer: Price & Button -->
                                    <div class="mt-auto d-flex flex-wrap justify-content-center align-items-center" style="gap: 20px;">
                                        <div class="text-center">
                                            @if($course->price > 0)
                                                <div class="font-weight-black" style="color: #800000; font-size: 1.1rem; line-height: 1;">₹{{ number_format($course->price, 2) }}</div>
                                                <div class="text-uppercase text-muted" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 0.5px;">Premium Course</div>
                                            @else
                                                <div class="font-weight-black" style="color: #800000; font-size: 1.1rem; line-height: 1;">FREE</div>
                                                <div class="text-uppercase text-muted" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 0.5px;">Portal Access</div>
                                            @endif
                                        </div>
                                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-light rounded-pill px-4 py-2 font-weight-bold text-maroon" style="font-size: 0.85rem;">View Details<i class="fas fa-chevron-right ms-2" style="font-size: 0.7rem;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <style>
        .filter-pill {
            padding: 8px 20px;
            background: #f1f5f9;
            color: #475569;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            white-space: nowrap;
        }

        .filter-pill:hover {
            background: #e2e8f0;
            color: #1e293b;
        }

        .filter-pill.active {
            background: #800000;
            color: white;
            box-shadow: 0 10px 20px rgba(128, 0, 0, 0.2);
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .btn-maroon:hover {
            background: #4a0000 !important;
            transform: scale(1.05);
        }

        .dropdown-pill {
            background: #f8fafc;
            border-radius: 50px;
            border: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
        }

        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%231e293b' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e") !important;
        }

        .custom-dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            margin-top: 5px !important;
            display: none;
            z-index: 1000;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .custom-dropdown-menu li {
            padding: 12px 20px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #1e293b;
            cursor: pointer;
            transition: all 0.2s;
        }

        .custom-dropdown-menu li:hover {
            background-color: #64748b;
            color: white;
        }

        /* 📱 Responsive Adjustments */
        @media (max-width: 991px) {
            .course-hero {
                min-height: 300px !important;
                padding: 100px 0 80px !important;
                text-align: center;
            }

            .course-hero .container {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .display-3 {
                font-size: 2.2rem !important;
                line-height: 1.2 !important;
                margin-bottom: 20px !important;
            }

            .course-hero p {
                font-size: 1rem !important;
                line-height: 1.6 !important;
                max-width: 450px;
            }

            .bg-white.p-2.shadow-lg {
                border-radius: 24px !important;
                padding: 30px 20px !important;
                max-width: 95% !important;
                margin: -40px auto 30px !important;
                border: 1px solid #f1f5f9 !important;
            }

            .bg-white.p-2.shadow-lg > .d-flex {
                flex-direction: column;
                gap: 12px;
                align-items: stretch;
            }

            /* 🔍 Proper Search Box */
            .flex-grow-1.d-flex.align-items-center {
                width: 100% !important;
                background: #f8fafc !important;
                border-radius: 12px !important;
                height: 52px !important;
                padding: 0 16px !important;
                border: 1px solid #e2e8f0 !important;
                margin-bottom: 0;
            }

            .flex-grow-1.d-flex.align-items-center input {
                text-align: left !important;
                font-size: 0.95rem !important;
                flex: 1;
                min-width: 0;
            }

            .flex-grow-1.d-flex.align-items-center i {
                margin-right: 12px !important;
                font-size: 1rem !important;
                color: #800000 !important;
                flex-shrink: 0;
            }

            /* 🔽 Consistent Dropdown Boxes */
            .d-flex.gap-2.me-2 {
                width: 100%;
                flex-direction: column;
                align-items: center;
                gap: 12px !important;
                margin-right: 0 !important;
            }

            .dropdown-pill {
                width: 100% !important;
                max-width: 100% !important;
                height: 52px !important;
                background: #f8fafc !important;
                border-radius: 12px !important;
                border: 1px solid #e2e8f0 !important;
                display: flex !important;
                align-items: center !important;
                padding: 0 16px !important;
            }

            .dropdown-pill > div, .form-select {
                width: 100% !important;
                background: transparent !important;
                border: none !important;
                font-size: 0.95rem !important;
                font-weight: 600 !important;
                color: #1e293b !important;
                text-align: left !important;
                padding: 0 !important;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .form-select {
                padding-left: 0 !important;
            }

            /* 🔄 Reset Button */
            .btn.p-0.d-flex {
                width: 100% !important;
                max-width: 100% !important;
                border-radius: 12px !important;
                height: 52px !important;
                justify-content: center !important;
                background: #800000 !important;
                color: white !important;
                transition: 0.3s;
                border: none !important;
                margin-top: 4px;
            }

            .btn.p-0.d-flex i {
                color: white !important;
                font-size: 1.2rem !important;
            }

            .course-card {
                text-align: center;
            }

            .d-flex.flex-wrap.gap-3.mb-5 {
                justify-content: center !important;
                gap: 10px !important;
            }

            .course-card .d-flex.justify-content-between {
                justify-content: center !important;
                gap: 15px;
            }

            .course-card .card-footer .d-flex {
                justify-content: center !important;
                gap: 20px;
            }

            .text-muted.font-weight-bold {
                text-align: center;
                display: block;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 767px) {
            .display-3 {
                font-size: 2rem !important;
            }

            .filter-pill {
                padding: 8px 15px;
                font-size: 0.75rem;
            }
        }
    </style>

    <script>
        let currentFilters = {
            search: '',
            category: 'categories',
            difficulty: 'difficulty',
            specialty: 'all specialties'
        };

        function applyFilters() {
            const items = document.querySelectorAll('.course-item');
            
            items.forEach(item => {
                const title = item.getAttribute('data-title');
                const category = item.getAttribute('data-category');
                const difficulty = item.getAttribute('data-difficulty');
                
                const matchesSearch = title.includes(currentFilters.search.toLowerCase());
                const matchesCategory = currentFilters.category === 'categories' || category === currentFilters.category.toLowerCase();
                const matchesDifficulty = currentFilters.difficulty === 'difficulty' || difficulty === currentFilters.difficulty.toLowerCase();
                const matchesSpecialty = currentFilters.specialty === 'all specialties' || category === currentFilters.specialty.toLowerCase();

                if (matchesSearch && matchesCategory && matchesDifficulty && matchesSpecialty) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Search Input
        document.querySelector('input[type="text"]').addEventListener('input', (e) => {
            currentFilters.search = e.target.value;
            applyFilters();
        });

        // Difficulty Selector
        document.querySelector('.form-select').addEventListener('change', (e) => {
            currentFilters.difficulty = e.target.value;
            applyFilters();
        });

        function toggleMenu(menuId) {
            const menu = document.getElementById(menuId);
            const isVisible = menu.style.display === 'block';
            document.querySelectorAll('.custom-dropdown-menu').forEach(m => m.style.display = 'none');
            menu.style.display = isVisible ? 'none' : 'block';
        }

        function selectItem(text, spanId, menuId) {
            document.getElementById(spanId).innerText = text;
            document.getElementById(menuId).style.display = 'none';
            currentFilters.category = text.toLowerCase();
            applyFilters();
        }

        // Reset All
        function resetFilters() {
            currentFilters = { search: '', category: 'categories', difficulty: 'difficulty', specialty: 'all specialties' };
            document.querySelector('input[type="text"]').value = '';
            document.getElementById('selectedCategory').innerText = 'Categories';
            document.querySelector('.form-select').value = 'Difficulty';
            document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
            document.querySelector('.filter-pill:first-child').classList.add('active');
            applyFilters();
        }

        // Specialty Pills
        document.querySelectorAll('.filter-pill').forEach(pill => {
            pill.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
                pill.classList.add('active');
                currentFilters.specialty = pill.innerText.toLowerCase();
                applyFilters();
            });
        });

        window.onclick = function(event) {
            if (!event.target.closest('.dropdown-pill')) {
                document.querySelectorAll('.custom-dropdown-menu').forEach(m => m.style.display = 'none');
            }
        }
    </script>
    </style>
@endsection