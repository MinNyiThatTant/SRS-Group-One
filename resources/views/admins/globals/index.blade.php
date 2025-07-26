@extends('admins.layout.master')

@section('content')
    <div class="row">
        <!-- Students Panel -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Students</div>
                <img src="{{ asset('images/stu.jpg') }}" class="card-img-top" alt="Students">
                <div class="card-body">
                    <h5 class="card-title">120</h5>
                    <p class="card-text">Total Students Registered</p>
                </div>
            </div>
        </div>

        <!-- Comments Panel -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Comments</div>
                <img src="{{ asset('images/comment.jpg') }}" class="card-img-top" alt="Comments">
                <div class="card-body">
                    <h5 class="card-title">52</h5>
                    <p class="card-text">Total Comments Received</p>
                </div>
            </div>
        </div>

        <!-- Active Students Panel -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Active Students</div>
                <img src="{{ asset('images/act-stu.jpg') }}" class="card-img-top" alt="Active Students">
                <div class="card-body">
                    <h5 class="card-title">24</h5>
                    <p class="card-text">Currently Active Students</p>
                </div>
            </div>
        </div>

        <!-- Views Panel -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Views</div>
                <img src="{{ asset('images/view.jpg') }}" class="card-img-top" alt="Views">
                <div class="card-body">
                    <h5 class="card-title">25.2k</h5>
                    <p class="card-text">Total Page Views</p>
                </div>
            </div>
        </div>

        <!-- Total Courses Panel -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Total Courses</div>
                <img src="{{ asset('images/tot-course.jpg') }}" class="card-img-top" alt="Courses">
                <div class="card-body">
                    <h5 class="card-title">30</h5>
                    <p class="card-text">Courses Available</p>
                </div>
            </div>
        </div>

        <!-- Total Instructors Panel -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Total Teacher</div>
                <img src="{{ asset('images/teacher.jpg') }}" class="card-img-top" alt="Instructors">
                <div class="card-body">
                    <h5 class="card-title">15</h5>
                    <p class="card-text">Teachers</p>
                </div>
            </div>
        </div>


        <!-- Recent Activity Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="m-0 font-weight-bold">Recent Student Registrations</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Program</th>
                                        <th>Date Registered</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ST2023-0124</td>
                                        <td>John Smith</td>
                                        <td>Computer Science</td>
                                        <td>May 15, 2023</td>
                                        <td><span class="status-badge bg-success text-white">Paid</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>ST2023-0125</td>
                                        <td>Sarah Johnson</td>
                                        <td>Business Admin</td>
                                        <td>May 16, 2023</td>
                                        <td><span class="status-badge bg-warning text-dark">Pending</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>ST2023-0126</td>
                                        <td>Michael Chen</td>
                                        <td>Electrical Eng</td>
                                        <td>May 17, 2023</td>
                                        <td><span class="status-badge bg-danger text-white">Overdue</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>ST2023-0127</td>
                                        <td>Emily Wilson</td>
                                        <td>Data Science</td>
                                        <td>May 18, 2023</td>
                                        <td><span class="status-badge bg-success text-white">Paid</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
