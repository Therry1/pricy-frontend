@extends('layouts.gestion_layout.app')

@section('title', 'PRICY - Project Honeycomb')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --pricy-sidebar-bg: #34314c;
            --pricy-profile-bg: #a389d4;
            --pricy-active-bg: #2b2841;
            --pricy-main-bg: #f4f7fa;
            --pricy-text-muted: #9fa2b4;
            --pricy-primary: #3751FF;
        }

        body.pricy-gestion-body {
            background-color: var(--pricy-main-bg) !important;
            font-family: 'Public Sans', sans-serif;
        }

        .pricy-sidebar {
            background-color: var(--pricy-sidebar-bg) !important;
            min-height: 100vh;
            color: white;
        }

        .pricy-profile-section {
            background-color: var(--pricy-profile-bg);
        }

        .pricy-side-menu .list-group-item {
            background: transparent !important;
            color: rgba(255, 255, 255, 0.6) !important;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding-left: 2rem !important;
            transition: all 0.3s ease;
        }

        .pricy-side-menu .list-group-item.active {
            background-color: var(--pricy-active-bg) !important;
            color: #7bc7cc !important;
            border-left: 4px solid #7bc7cc !important;
        }

        .pricy-side-menu .list-group-item:hover:not(.active) {
            color: white !important;
            background-color: rgba(255, 255, 255, 0.05) !important;
        }

        .card {
            border-radius: 8px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .card-title {
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--pricy-text-muted);
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }

        .team-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #eee;
            object-fit: cover;
        }

        .activity-badge {
            font-size: 0.65rem;
            font-weight: 800;
            padding: 4px 8px;
            border-radius: 4px;
            text-transform: uppercase;
        }

        .badge-upload { background-color: #7bc7cc; color: white; }
        .badge-task { background-color: #ffd9a1; color: #8a6d3b; }
        .badge-deleted { background-color: #f27272; color: white; }
        .badge-working { background-color: #50b0b5; color: white; }

        .btn-add-teammate {
            background-color: #e0e0e0;
            border: none;
            color: #757575;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            width: 100%;
            padding: 10px;
            margin-top: 1rem;
        }

        /* Analytics Chart Simulation */
        .analytics-container {
            position: relative;
            height: 300px;
            background: linear-gradient(to bottom, #ffffff, #f8f9fa);
            border-radius: 0 0 8px 8px;
            overflow: hidden;
            margin-top: 2rem;
        }

        .chart-layer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .chart-tooltip {
            position: absolute;
            background: #1b1b1b;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            z-index: 10;
            top: 40%;
            left: 60%;
        }

        .chart-tooltip::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #1b1b1b;
        }

        .timeline-label {
            font-size: 0.7rem;
            color: var(--pricy-text-muted);
            text-align: center;
            font-weight: 600;
        }

        /* Sidebar Toggle Logic */
        .pricy-gestion-shell {
            transition: all 0.3s ease;
            display: grid;
            grid-template-columns: 260px 1fr;
        }

        .sidebar-collapsed .pricy-sidebar {
            width: 0;
            overflow: hidden;
            padding: 0 !important;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar-collapsed .pricy-gestion-shell {
            grid-template-columns: 0 1fr;
        }

        .pricy-sidebar {
            transition: all 0.3s ease;
            width: 260px;
            z-index: 1000;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid py-4 px-lg-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div class="d-flex align-items-center gap-3">
            <button id="sidebarToggle" class="btn p-0 border-0 text-muted fs-4">
                <i class="bi bi-list"></i>
            </button>
            <h1 class="h3 fw-normal mb-0" style="color: #4b4b4b;">Project Honeycomb</h1>
        </div>
        <button class="btn btn-dark btn-sm px-3 py-2 fw-bold d-flex align-items-center gap-2" style="font-size: 0.75rem; border-radius: 4px;">
            <i class="bi bi-plus-circle-fill"></i> ADD WIDGET
        </button>
    </div>

    <div class="row g-4">
        <!-- Team Involved -->
        <div class="col-12 col-xl-4">
            <div class="card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="card-title mb-0">Team Involved</h6>
                    <i class="bi bi-gear text-muted small"></i>
                </div>
                
                <div class="team-list">
                    @php
                        $team = [
                            ['name' => "Jack O'Connelly", 'role' => 'UI / UX Designer'],
                            ['name' => 'Antonio King', 'role' => 'Web Designer'],
                            ['name' => 'Denise Jackson', 'role' => 'Developer'],
                            ['name' => 'Andy K.', 'role' => 'Project Manager'],
                            ['name' => 'Jamie Morano', 'role' => 'Project Manager'],
                        ];
                    @endphp
                    @foreach($team as $member)
                        <div class="d-flex align-items-center gap-3 mb-3 pb-2 border-bottom border-light">
                            <div class="rounded-circle bg-light shadow-sm" style="width: 40px; height: 40px;">
                                <!-- Placeholder for avatar -->
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold" style="font-size: 0.85rem;">{{ $member['name'] }}</h6>
                                <p class="small text-muted mb-0" style="font-size: 0.75rem;">{{ $member['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <button class="btn btn-add-teammate">
                    <i class="bi bi-plus-circle pe-2"></i> ADD TEAMMATE
                </button>
            </div>
        </div>

        <!-- Project Activity -->
        <div class="col-12 col-xl-8">
            <div class="card h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="card-title mb-0">Project Activity</h6>
                    <i class="bi bi-gear text-muted small"></i>
                </div>

                <div class="activity-list">
                    <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="activity-badge badge-upload">Upload</span>
                            <div>
                                <h6 class="mb-0 fw-bold" style="font-size: 0.9rem;">Comb - Homepage.psd</h6>
                                <p class="small text-muted mb-0">11:50 am <span class="ps-2">by Antonio King</span></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="progress" style="width: 100px; height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #7bc7cc;"></div>
                            </div>
                            <span class="small text-muted">(12.5 of 20 mb)</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="activity-badge badge-task">Task</span>
                            <div>
                                <h6 class="mb-0 fw-bold" style="font-size: 0.9rem;">Contact_Form.psd / Development</h6>
                                <p class="small text-muted mb-0">11:40 am <span class="ps-2">by Andy K.</span></p>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-light text-muted d-flex align-items-center gap-2 px-3 py-1" style="font-size: 0.7rem;">
                            <i class="bi bi-file-earmark-text"></i> VIEW
                        </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="activity-badge badge-deleted">Deleted</span>
                            <div>
                                <h6 class="mb-0 fw-bold" style="font-size: 0.9rem;">Development UI Kit (v.12.08.2013)</h6>
                                <p class="small text-muted mb-0">11:27 am <span class="ps-2">by Denise Jackson</span></p>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-danger d-flex align-items-center gap-2 px-3 py-1" style="font-size: 0.7rem; background-color: #f27272; border: none;">
                            <i class="bi bi-arrow-counterclockwise"></i> RESTORE
                        </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="activity-badge badge-working">Working</span>
                            <div>
                                <h6 class="mb-0 fw-bold" style="font-size: 0.9rem;">Graphs & Statistics.psd</h6>
                                <p class="small text-muted mb-0">11:20 am <span class="ps-2">by Neamu Tiberiu</span></p>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-light text-muted d-flex align-items-center gap-2 px-3 py-1" style="font-size: 0.7rem;">
                            <i class="bi bi-eye"></i> PEEK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Chart -->
    <div class="analytics-container shadow-sm mt-5">
        <svg class="chart-layer" viewBox="0 0 1000 300" preserveAspectRatio="none">
            <!-- Multi-layered area chart paths (simulated) -->
            <path d="M0,250 Q150,220 300,240 T600,200 T1000,220 L1000,300 L0,300 Z" fill="#f27272" opacity="0.8"></path>
            <path d="M0,260 Q150,230 300,250 T600,210 T1000,230 L1000,300 L0,300 Z" fill="#f9a886" opacity="0.8"></path>
            <path d="M0,270 Q150,240 300,260 T600,220 T1000,240 L1000,300 L0,300 Z" fill="#ffd9a1" opacity="0.8"></path>
            <path d="M0,280 Q150,250 300,270 T600,230 T1000,250 L1000,300 L0,300 Z" fill="#7bc7cc" opacity="0.8"></path>
            <path d="M0,290 Q150,260 300,280 T600,240 T1000,260 L1000,300 L0,300 Z" fill="#50b0b5" opacity="1"></path>
            
            <!-- Tooltip Line & Point -->
            <line x1="650" y1="0" x2="650" y2="300" stroke="white" stroke-width="2" stroke-dasharray="4"></line>
            <circle cx="650" cy="205" r="6" fill="white" stroke="#50b0b5" stroke-width="4"></circle>
            
            <!-- White dots -->
            <circle cx="100" cy="235" r="3" fill="white"></circle>
            <circle cx="250" cy="225" r="3" fill="white"></circle>
            <circle cx="450" cy="215" r="3" fill="white"></circle>
            <circle cx="800" cy="210" r="3" fill="white"></circle>
        </svg>

        <div class="chart-tooltip" style="left: 60%; top: 30%;">
            <p class="mb-0 fw-bold">Client feedback 10+</p>
            <p class="mb-0 opacity-75">Modifying mockups</p>
        </div>
    </div>

    <!-- Timeline Labels -->
    <div class="row mt-3">
        <div class="col text-center timeline-label">27<br>APR</div>
        <div class="col text-center timeline-label">30<br>MAY</div>
        <div class="col text-center timeline-label">06<br>JUN</div>
        <div class="col text-center timeline-label">13<br>JUL</div>
        <div class="col text-center timeline-label fw-bold text-dark border-bottom border-primary pb-1">22<br>MAY</div>
        <div class="col text-center timeline-label">09<br>JUN</div>
        <div class="col text-center timeline-label">27<br>NOV</div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('sidebarToggle');
        const shell = document.querySelector('.pricy-gestion-shell');
        const body = document.body;

        toggleBtn.addEventListener('click', function() {
            body.classList.toggle('sidebar-collapsed');
        });
    });
</script>
@endpush
@endsection
