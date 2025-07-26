@extends('home.layout.master')
@section('content')

<style>
    .btn-group-toggle .btn:not(.active) {
        background-color: transparent;
        color: #007bff;
    }
    .btn-group-toggle .btn.active {
        background-color: #007bff;
        color: white;
    }
    .course-card {
        transition: all 0.3s ease;
    }
</style>

<!-- Hero Section -->
<section class="courses-hero mb-5 custom-padding" style="background-image: url(images/hero-bg.png);">
    <div class="container">
        <h1 class="display-4 font-weight-bold mb-3 text-white">Our Engineering Programs Courses</h1>
        <p class="lead text-white">West Yangon Technological University offers 11 specialized engineering departments with modern facilities and industry-focused curriculum.</p>
    </div>
</section>

<!-- Main Content -->
<div class="container">
    <!-- Filter Buttons -->
    <div class="department-filter text-center">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-primary active">
                <input type="radio" name="options" value="all" checked> All Departments
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="options" value="undergraduate"> Undergraduate
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="options" value="graduate"> Graduate
            </label>
        </div>
    </div>

    <!-- Courses Grid -->
    <div class="row">
        <!-- Civil Engineering -->
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/civil.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Civil Engineering</h4>
                <p>Design and construct infrastructure projects like buildings, bridges, and transportation systems.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Computer Science -->
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="undergraduate graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/ceit.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Computer Engineering & IT</h4>
                <p>Master software development, artificial intelligence, and cutting-edge computing technologies.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Electrical Power -->
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="undergraduate graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/ep.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Electrical Power Engineering</h4>
                <p>Specialize in power generation, transmission, and renewable energy systems engineering.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Architectural -->
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="undergraduate">
            <div class="course-img" style="background-image: url('{{ asset('images/archi.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Architectural Engineering</h4>
                <p>Combine architectural design with engineering principles to create sustainable buildings.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Mechanical -->
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="undergraduate graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/mech.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Mechanical Engineering</h4>
                <p>Design and analyze mechanical systems from small components to large industrial machines.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Electronics -->
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="undergraduate graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/ec.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Electronics Engineering</h4>
                <p>Develop expertise in circuit design, embedded systems, and modern electronic devices.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        {{-- chemical --}}
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/chem.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Chemical Engineering</h4>
                <p>Design and construct infrastructure projects like buildings, bridges, and transportation systems.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        {{-- agri --}}
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/agri.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Agricultural Engineering</h4>
                <p>Design and construct infrastructure projects like buildings, bridges, and transportation systems.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        {{-- mc --}}
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/mc.png') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Machatronics Engineering</h4>
                <p>Design and construct infrastructure projects like buildings, bridges, and transportation systems.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        {{-- textile --}}
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/textile.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Textile Engineering</h4>
                <p>Design and construct infrastructure projects like buildings, bridges, and transportation systems.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        {{-- metro --}}
        <div class="col-lg-4 col-md-6 mb-4 course-card" data-department="graduate">
            <div class="course-img" style="background-image: url('{{ asset('images/metro.jpg') }}');"></div>
            <div class="course-body">
                <h4 class="font-weight-bold">Metrology Engineering</h4>
                <p>Design and construct infrastructure projects like buildings, bridges, and transportation systems.</p>
                <div class="mt-auto">
                    <span class="badge badge-pill mb-2">Bachelor of Engineering</span>
                    <span class="badge badge-pill mb-2">Six Year Program</span>
                </div>
            </div>
            <div class="course-footer">
                <a href="#" class="btn btn-primary btn-sm">Program Details <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<a href="#" class="back-to-top" aria-label="Back to top" title="Back to top">
    <span class="material-icons" aria-hidden="true">arrow_upward</span>
</a>

<!-- Call to Action -->
<section class="bg-light py-5 mt-5">
    <div class="container text-center">
        <h2 class="font-weight-bold mb-4">Interested in Our Engineering Programs?</h2>
        <p class="lead mb-4">Explore our admission requirements and application process</p>
        <a href="" class="btn btn-primary btn-lg">Admission Information</a>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Initially hide all course cards
        $('.course-card').hide();

        // Function to filter courses
        function filterCourses(department) {
            $('.course-card').each(function() {
                const cardDepartments = $(this).data('department').split(' ');
                if (department === 'all' || cardDepartments.includes(department)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        // Set initial filter to show all courses
        filterCourses('all');

        // Event handling for radio buttons
        $('input[type="radio"][name="options"]').on('change', function() {
            // Get the value from the clicked radio
            const filterValue = $(this).val();
            filterCourses(filterValue);
        });
    });
</script>

@include('include.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
