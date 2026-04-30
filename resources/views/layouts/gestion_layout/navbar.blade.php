<aside class="pricy-sidebar d-flex flex-column">
    <!-- Profile Section -->
    <div class="pricy-profile-section p-3 p-lg-4 d-flex align-items-center gap-3">
        <div class="rounded-circle bg-white overflow-hidden shadow-sm d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <!-- Placeholder for profile photo -->
            <i class="bi bi-person-fill text-muted fs-4"></i>
        </div>
        <div>
            <p class="small text-uppercase fw-bold mb-0 opacity-75 text-white-50">To Do Buddy</p>
            <h6 class="fw-bold mb-0 text-white">NEAMU TIBERIU</h6>
        </div>
    </div>

    <!-- Menu Section -->
    <div class="p-3 p-lg-4 flex-grow-1 overflow-auto">
        <div class="list-group pricy-side-menu list-group-flush">
            <a href="{{ route('gestion.dashboard') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="bi bi-grid-fill"></i> DASHBOARD
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="bi bi-image"></i> VISUAL ATTACHMENTS
            </a>
            <a href="#" class="list-group-item list-group-item-action active d-flex align-items-center gap-3 py-3 border-0">
                <i class="bi bi-eye-fill"></i> PROJECT STATISTICS
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="bi bi-people-fill"></i> TEAM MEMBERS
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="bi bi-hdd-stack-fill"></i> SERVER DATA
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="bi bi-folder-fill"></i> FOLDER SETTINGS
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between gap-3 py-3 border-0">
                <span class="d-flex align-items-center gap-3">
                    <i class="bi bi-chat-left-dots-fill"></i> MESSAGES
                </span>
                <span class="badge rounded-pill bg-danger">227</span>
            </a>
        </div>
    </div>

    <!-- Progress Indicator -->
    <div class="p-4 mt-auto">
        <div class="text-center">
            <div class="position-relative d-inline-block">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="8" />
                    <circle cx="50" cy="50" r="45" fill="none" stroke="#ff5252" stroke-width="8" 
                            stroke-dasharray="282.7" stroke-dashoffset="56.5" 
                            stroke-linecap="round" transform="rotate(-90 50 50)" />
                </svg>
                <div class="position-absolute top-50 start-50 translate-middle text-white">
                    <h4 class="fw-bold mb-0">80%</h4>
                    <p class="small text-uppercase mb-0" style="font-size: 0.6rem;">Completed</p>
                </div>
            </div>
        </div>
    </div>
</aside>
