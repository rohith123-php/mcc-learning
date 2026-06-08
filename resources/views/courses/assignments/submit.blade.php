@extends('layouts.app')

@section('content')
<div class="assignment-submission-portal">
    <!-- Success Overlay (Hidden by Default) -->
    <div id="successOverlay" class="position-fixed w-100 h-100 d-none align-items-center justify-content-center" 
        style="top:0; left:0; background: rgba(255,255,255,0.98); z-index: 9999; backdrop-filter: blur(10px);">
        <div class="text-center animate__animated animate__zoomIn">
            <div class="mb-4">
                <i class="fas fa-check-circle text-success" style="font-size: 6rem; filter: drop-shadow(0 10px 20px rgba(40, 167, 69, 0.2));"></i>
            </div>
            <h2 class="display-4 font-weight-bold mb-3" style="color: #1e293b;">Submission Successful!</h2>
            <p class="text-muted mb-5" style="font-size: 1.1rem;">Your assignment has been received and is ready for faculty review.<br>Keep learning, keep growing!</p>
            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-maroon px-5 py-3 shadow-lg rounded-pill font-weight-bold" style="font-size: 1.1rem;">
                Back to Course Dashboard <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
    <!-- 🏔️ Premium Assignment Hero -->
    <section class="assignment-hero pt-4 pb-5" style="background: linear-gradient(rgba(128, 0, 0, 0.9), rgba(74, 0, 0, 0.9)), url('{{ asset('images/mcc_digital_lab.png') }}'); background-size: cover; background-position: center; min-height: 250px; display: flex; align-items: center; color: white;">
        <div class="container animate__animated animate__fadeIn">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb bg-transparent p-0 m-0" style="font-size: 0.85rem; font-weight: 500;">
                    <li class="breadcrumb-item"><a href="{{ route('courses.show', $course->id) }}" class="text-white opacity-75 text-decoration-none">Back to Course</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Task Submission</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-2" style="font-family: 'Playfair Display', serif;">{{ $assignment->title }}</h1>
            <div class="d-flex align-items-center gap-4 mt-3" style="gap: 25px;">
                <span class="small font-weight-bold"><i class="far fa-calendar-alt mr-2"></i> Due: {{ \Carbon\Carbon::parse($assignment->due_date)->format('M d, Y') }}</span>
                <span class="small font-weight-bold"><i class="far fa-star mr-2"></i> Points: 500 pts</span>
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold" style="font-size: 0.7rem;">PENDING SUBMISSION</span>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <!-- ⬅️ Main Submission Area -->
            <div class="col-lg-8">
                <div class="submission-card p-4 p-md-5 mb-4 shadow-sm border-0" style="background: white; border-radius: 24px;">
                    <h3 class="font-weight-bold mb-4" style="color: #1e293b;">Submit Your Work</h3>
                    
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Text Submission Area -->
                        <div class="mb-5">
                            <label class="form-label font-weight-bold text-muted small text-uppercase mb-3" style="letter-spacing: 1px;">Project Summary / Notes</label>
                            <textarea class="form-control border-light shadow-none p-4" rows="6" 
                                placeholder="Provide a brief description of your implementation, challenges faced, and any specific notes for the evaluator..."
                                style="background: #f8fafc; border-radius: 16px; border: 1px solid #e2e8f0;"></textarea>
                        </div>

                        <!-- File Upload Dropzone -->
                        <div class="mb-5">
                            <label class="form-label font-weight-bold text-muted small text-uppercase mb-3" style="letter-spacing: 1px;">Upload Project Files</label>
                            <div class="upload-dropzone p-5 text-center border-dashed" 
                                style="border: 2px dashed #cbd5e1; border-radius: 20px; background: #f8fafc; transition: all 0.3s ease;">
                                <i class="fas fa-cloud-upload-alt display-4 text-maroon mb-3 opacity-50"></i>
                                <h5 class="font-weight-bold" style="color: #1e293b;">Drag & Drop Files Here</h5>
                                <p class="text-muted small mb-4">Support for PDF, DOCX, ZIP, and JPG (Max 50MB)</p>
                                <input type="file" id="fileUpload" class="d-none">
                                <button type="button" onclick="document.getElementById('fileUpload').click()" 
                                    class="btn btn-maroon px-4 py-2 rounded-pill font-weight-bold">Browse Files</button>
                            </div>
                        </div>

                        <hr class="my-5 opacity-50">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('courses.show', $course->id) }}" class="text-muted text-decoration-none font-weight-bold small">
                                <i class="fas fa-arrow-left mr-2"></i> Discard & Go Back
                            </a>
                            <button type="submit" class="btn btn-maroon px-5 py-3 shadow-lg rounded-pill font-weight-bold" 
                                style="background: #800000; box-shadow: 0 10px 20px rgba(128, 0, 0, 0.2) !important;">
                                Confirm & Submit Assignment
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ➡️ Guidelines Sidebar -->
            <div class="col-lg-4">
                <div class="guidelines-card p-4 mb-4 shadow-sm border-0" style="background: white; border-radius: 20px; border: 1px solid #f1f5f9;">
                    <h5 class="font-weight-bold mb-4" style="color: #1e293b;">Academic Guidelines</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-4 d-flex align-items-start gap-3">
                            <div class="bg-soft-maroon p-2 rounded-circle mt-1">
                                <i class="fas fa-info-circle text-maroon" style="font-size: 0.85rem;"></i>
                            </div>
                            <div class="small">
                                <strong class="d-block mb-1" style="color: #1e293b;">Originality Policy</strong>
                                <span class="text-muted">Ensure all submitted work is your own. Plagiarism will result in immediate disqualification.</span>
                            </div>
                        </li>
                        <li class="mb-4 d-flex align-items-start gap-3">
                            <div class="bg-soft-maroon p-2 rounded-circle mt-1">
                                <i class="fas fa-clock text-maroon" style="font-size: 0.85rem;"></i>
                            </div>
                            <div class="small">
                                <strong class="d-block mb-1" style="color: #1e293b;">Late Submissions</strong>
                                <span class="text-muted">Submissions after the deadline are subject to a 10% point deduction per day.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="bg-soft-maroon p-2 rounded-circle mt-1">
                                <i class="fas fa-file-alt text-maroon" style="font-size: 0.85rem;"></i>
                            </div>
                            <div class="small">
                                <strong class="d-block mb-1" style="color: #1e293b;">File Naming</strong>
                                <span class="text-muted">Format your files as: <code>[RollNo]_[AssignmentTitle]</code> for easier processing.</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="help-card p-4 shadow-sm border-0" style="background: #1e293b; border-radius: 20px; color: white;">
                    <h6 class="font-weight-bold mb-3">Need Assistance?</h6>
                    <p class="small opacity-75 mb-4">If you encounter technical issues during submission, contact our support team immediately.</p>
                    <a href="#" class="btn btn-outline-light w-100 font-weight-bold py-2" style="border-radius: 10px; font-size: 0.85rem;">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .assignment-submission-portal {
        background: #f8fafc;
        min-height: 100vh;
    }
    
    .assignment-hero {
        position: relative;
    }

    .btn-maroon {
        background: #800000;
        color: white;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-maroon:hover {
        background: #4a0000;
        color: white;
        transform: translateY(-2px);
    }

    .bg-soft-maroon {
        background: #fff1f2;
    }

    .text-maroon {
        color: #800000;
    }

    .upload-dropzone:hover {
        background: #f1f5f9 !important;
        border-color: #800000 !important;
    }

    .form-control:focus {
        border-color: #800000 !important;
        background: white !important;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.5);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropzone = document.querySelector('.upload-dropzone');
        const fileInput = document.getElementById('fileUpload');
        
        // Create file list container
        const fileList = document.createElement('div');
        fileList.className = 'mt-4 text-left';
        fileList.id = 'selectedFileList';
        dropzone.after(fileList);

        function handleFiles(files) {
            if (files.length === 0) return;
            
            fileList.innerHTML = '<h6 class="font-weight-bold mb-3 text-muted small text-uppercase" style="letter-spacing: 1px;">Selected Files:</h6>';
            Array.from(files).forEach(file => {
                const fileItem = document.createElement('div');
                fileItem.className = 'd-flex align-items-center p-3 mb-2 bg-white border rounded-lg animate__animated animate__fadeInUp';
                fileItem.style.cssText = 'border-radius: 12px; border-color: #e2e8f0 !important;';
                fileItem.innerHTML = `
                    <div class="bg-soft-maroon p-2 rounded-circle mr-3">
                        <i class="fas fa-file-alt text-maroon"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="small font-weight-bold" style="color: #1e293b;">${file.name}</div>
                        <div class="text-muted" style="font-size: 0.7rem;">${(file.size / 1024 / 1024).toFixed(2)} MB</div>
                    </div>
                    <i class="fas fa-times-circle text-muted cursor-pointer hover-text-maroon" style="cursor: pointer;" onclick="this.parentElement.remove()"></i>
                `;
                fileList.appendChild(fileItem);
            });
        }

        fileInput.addEventListener('change', (e) => handleFiles(e.target.files));

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.style.background = '#f1f5f9';
            dropzone.style.borderColor = '#800000';
            dropzone.style.transform = 'scale(1.02)';
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.style.background = '#f8fafc';
            dropzone.style.borderColor = '#cbd5e1';
            dropzone.style.transform = 'scale(1)';
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.style.background = '#f8fafc';
            dropzone.style.borderColor = '#cbd5e1';
            dropzone.style.transform = 'scale(1)';
            handleFiles(e.dataTransfer.files);
        });

        // Handle Submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Validating & Submitting...';
            submitBtn.disabled = true;

            // Simulate server submission delay
            setTimeout(() => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                document.getElementById('successOverlay').classList.remove('d-none');
                document.getElementById('successOverlay').classList.add('d-flex');
                document.body.style.overflow = 'hidden'; // Lock scroll on success
            }, 1500);
        });
    });
</script>
@endsection
