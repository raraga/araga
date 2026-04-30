@props(['message' => null, 'type' => 'success'])

@if ($message)
    <div id="notification-toast" class="notification notification-{{ $type }}" role="alert">
        <span class="notification-icon">
            @switch($type)
                @case('success')
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    @break
                @case('error')
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    @break
                @case('warning')
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    @break
                @default
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
            @endswitch
        </span>
        <span class="notification-message">{{ $message }}</span>
        <button type="button" id="notification-close" class="notification-close" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
    
    <script>
    (function() {
        var toast = document.getElementById('notification-toast');
        var closeBtn = document.getElementById('notification-close');
        if (!toast) return;
        
        setTimeout(function() {
            toast.classList.add('notification-show');
        }, 100);
        
        setTimeout(function() {
            toast.classList.remove('notification-show');
            setTimeout(function() {
                toast.remove();
            }, 500);
        }, 5000);
        
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                toast.classList.remove('notification-show');
                setTimeout(function() {
                    toast.remove();
                }, 500);
            });
        }
    })();
    </script>
@endif