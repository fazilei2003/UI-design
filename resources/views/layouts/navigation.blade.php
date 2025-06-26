<nav class="admin-header">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 0;">
            <div style="display: flex; align-items: center; gap: 2rem;">
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div class="logo">NU</div>
                    <div style="color: white; font-weight: 600;">
                        Admin Panel
                    </div>
                </div>

                <div class="admin-nav" style="border-radius: 25px; padding: 0.5rem;">
                    <div style="display: flex; gap: 1rem;">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            Dashboard
                        </a>
                        @can('allow_admin')
                        <a href="{{ route('admin.hotline.dashboard') }}" class="nav-link {{ request()->routeIs('admin.hotline.*') ? 'active' : '' }}">
                            Hotlines
                        </a>
                        <a href="{{ route('admin.consultation.dashboard') }}" class="nav-link {{ request()->routeIs('admin.consultation.*') ? 'active' : '' }}">
                            Consultation
                        </a>
                        <a href="{{ route('admin.services.dashboard') }}" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                            Services
                        </a>
                        <a href="{{ route('admin.counselor.dashboard') }}" class="nav-link {{ request()->routeIs('admin.counselors.*') ? 'active' : '' }}">
                            Counselors
                        </a>
                        <a href="{{ route('admin.quote.index') }}" class="nav-link {{ request()->routeIs('admin.quote.*') ? 'active' : '' }}">
                            Quotes
                        </a>
                        <a href="{{ route('admin.freedomwall.freedomwall') }}" class="nav-link {{ request()->routeIs('admin.freedomwall.*') ? 'active' : '' }}">
                            e-Hayag
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div style="position: relative;">
                <div style="display: flex; align-items: center; gap: 1rem; cursor: pointer;" onclick="toggleDropdown()">
                    <span style="color: white;">{{ Auth::user()->name }}</span>
                    <div style="color: white;">▼</div>
                </div>
                
                <div id="userDropdown" style="display: none; position: absolute; right: 0; top: 100%; background: white; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); min-width: 200px; z-index: 1000;">
                    <a href="{{ route('profile.edit') }}" style="display: block; padding: 1rem; color: #333; text-decoration: none; border-bottom: 1px solid #f0f0f0;">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="width: 100%; text-align: left; padding: 1rem; background: none; border: none; color: #333; cursor: pointer;">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleDropdown() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('userDropdown');
    const trigger = event.target.closest('[onclick="toggleDropdown()"]');
    
    if (!trigger && dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
    }
});
</script>
