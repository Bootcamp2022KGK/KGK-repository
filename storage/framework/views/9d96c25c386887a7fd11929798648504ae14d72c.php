<link rel="stylesheet" href="<?php echo e(asset('styles/navbar.css')); ?>">
<div class="navigation_bar">

    <div class="menu_icon">
        <svg class="hamburger" width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M29.5 12H11V11H29.5V12ZM29.5 20H11V19H29.5V20ZM11 28H29.5V27H11V28Z" fill="black" />
        </svg>

        <svg class="times hidden" width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M21.0607 20.3536L28.7071 12.7071L28 12L20.3536 19.6464L12.7071 12L12 12.7071L19.6464 20.3536L12 28L12.7071 28.7071L20.3536 21.0607L28 28.7071L28.7071 28L21.0607 20.3536Z"
                fill="black" />
        </svg>
    </div>

    <div class="logo">
        <a href="/">
            <svg width="50" height="50" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path fill="#000"
                    d="M256 21A235 235 0 0 0 21 256a235 235 0 0 0 235 235 235 235 0 0 0 235-235A235 235 0 0 0 256 21zm0 82c84.393 0 153 68.607 153 153s-68.607 153-153 153-153-68.607-153-153 68.607-153 153-153zm0 18c-20.417 0-39.757 4.52-57.09 12.602C210.457 166.482 230.218 208 256 208c25.823 0 44.926-41.65 56.752-74.555C295.505 125.462 276.284 121 256 121zm98.752 42.88c-27.714 21.143-61.142 52.79-53.17 77.327 7.981 24.564 53.508 29.858 88.459 30.936.628-5.294.959-10.678.959-16.143 0-35.642-13.755-68.012-36.248-92.12zm-197.729.243C134.663 188.204 121 220.477 121 256c0 5.55.34 11.018.988 16.39 34.833-.825 80.381-6.793 88.344-31.3 7.974-24.542-25.68-55.553-53.309-76.967zm70.188 43.643a9 9 0 0 0-5.035 1.714 9 9 0 0 0-1.99 12.57 9 9 0 0 0 12.57 1.993 9 9 0 0 0 1.992-12.572 9 9 0 0 0-7.537-3.705zm57.578 0a9 9 0 0 0-.637.004 9 9 0 0 0-6.9 3.7 9 9 0 0 0 1.992 12.573 9 9 0 0 0 12.57-1.992 9 9 0 0 0-1.99-12.57 9 9 0 0 0-5.035-1.715zM256 224a32 32 0 0 0-32 32 32 32 0 0 0 32 32 32 32 0 0 0 32-32 32 32 0 0 0-32-32zm-46.297 38.037a9 9 0 0 0-2.652.44 9 9 0 0 0-5.78 11.341 9 9 0 0 0 11.34 5.778 9 9 0 0 0 5.78-11.34 9 9 0 0 0-8.688-6.219zm92.856.008a9 9 0 0 0-8.95 6.21 9 9 0 0 0 5.78 11.34 9 9 0 0 0 11.34-5.777 9 9 0 0 0-5.78-11.341 9 9 0 0 0-2.39-.432zm-92.143 27.713c-21.59.104-50.24 16.832-72.424 31.928 19.029 34.168 52.46 59.164 92.143 66.837 9.99-33.39 18.42-78.618-2.446-93.777-4.854-3.527-10.737-5.02-17.273-4.988zm91.016.02c-6.58 0-12.492 1.516-17.346 5.042-20.895 15.181-11.863 60.106-2.088 93.678 39.687-7.715 73.108-32.76 92.1-66.973-22.006-15.224-50.935-31.747-72.666-31.748zM256 295.58a9 9 0 0 0-9 9 9 9 0 0 0 9 9 9 9 0 0 0 9-9 9 9 0 0 0-9-9z" />
            </svg>
        </a>
    </div>

    <nav class="nav hidden">
        <ul>

            <a href="<?php echo e(route('welcome')); ?>" class="home_link">
                <li>Home</li>
            </a>
            <a href="<?php echo e(route('productpage')); ?>" class="products_link">
                <li>Products</li>
            </a>
            <a href="<?php echo e(route('about')); ?>" class="about_link">
                <li>About</li>
            </a>
            <a href="<?php echo e(route('homepage')); ?>" class="contacts_link">
                <li>Blog</li>

            </a>
        </ul>

        <button class="icon profile_icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.5 5C7.5 4.20435 7.81607 3.44129 8.37868 2.87868C8.94129 2.31607 9.70435 2 10.5 2C11.2956 2 12.0587 2.31607 12.6213 2.87868C13.1839 3.44129 13.5 4.20435 13.5 5C13.5 5.79565 13.1839 6.55871 12.6213 7.12132C12.0587 7.68393 11.2956 8 10.5 8C9.70435 8 8.94129 7.68393 8.37868 7.12132C7.81607 6.55871 7.5 5.79565 7.5 5ZM10.5 1C9.43913 1 8.42172 1.42143 7.67157 2.17157C6.92143 2.92172 6.5 3.93913 6.5 5C6.5 6.06087 6.92143 7.07828 7.67157 7.82843C8.42172 8.57857 9.43913 9 10.5 9C11.5609 9 12.5783 8.57857 13.3284 7.82843C14.0786 7.07828 14.5 6.06087 14.5 5C14.5 3.93913 14.0786 2.92172 13.3284 2.17157C12.5783 1.42143 11.5609 1 10.5 1ZM16.08 13.15C17.2 13.97 17.91 15.39 17.99 18H3.01C3.09 15.4 3.8 13.97 4.91 13.15C6.16 12.25 8 12 10.5 12C13 12 14.85 12.26 16.08 13.15ZM10.5 11C8 11 5.85 11.24 4.33 12.35C2.77 13.48 2 15.43 2 18.5V19H19V18.5C19 15.43 18.23 13.48 16.67 12.35C15.15 11.25 13 11 10.5 11Z"
                    fill="black" />
            </svg>
            <span>Log in</span>
        </button>

        <div class="social_media_links">
            <a href="" class="link twitter">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.1452 6.62529C17.1452 6.79391 17.1452 6.94848 17.1452 7.08899C17.1452 8.35363 16.9063 9.60422 16.4286 10.8407C15.9789 12.0492 15.3185 13.1593 14.4473 14.171C13.6042 15.1827 12.4941 16.0117 11.1171 16.6581C9.76815 17.2763 8.27869 17.5855 6.64871 17.5855C4.59719 17.5855 2.71429 17.0375 1 15.9415C1.28103 15.9696 1.57611 15.9836 1.88525 15.9836C3.59953 15.9836 5.13115 15.4637 6.48009 14.4239C5.66511 14.3958 4.93443 14.1429 4.28806 13.6651C3.66979 13.1874 3.24824 12.5831 3.02342 11.8525C3.24824 11.9087 3.47307 11.9368 3.69789 11.9368C4.03513 11.9368 4.35831 11.8806 4.66745 11.7681C3.82436 11.5995 3.12178 11.178 2.55972 10.5035C1.99766 9.82904 1.71663 9.05621 1.71663 8.18501C1.71663 8.15691 1.71663 8.14286 1.71663 8.14286C2.25059 8.42389 2.81265 8.57845 3.40281 8.60656C2.30679 7.84777 1.75878 6.82201 1.75878 5.52927C1.75878 4.8548 1.9274 4.23653 2.26464 3.67447C3.19204 4.79859 4.30211 5.69789 5.59485 6.37237C6.91569 7.04684 8.33489 7.42623 9.85246 7.51054C9.79625 7.22951 9.76815 6.94848 9.76815 6.66745C9.76815 5.65574 10.1194 4.79859 10.822 4.09602C11.5527 3.36534 12.4239 3 13.4356 3C14.5035 3 15.4028 3.37939 16.1335 4.13817C16.9766 3.96956 17.7635 3.67447 18.4941 3.25293C18.2131 4.12412 17.6651 4.79859 16.8501 5.27635C17.6089 5.19204 18.3255 5.00937 19 4.72834C18.4941 5.45902 17.8759 6.09133 17.1452 6.62529Z"
                        fill="#121212" />
                </svg>

            </a>
            <a href="" class="link facebook">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.3021 4.58314H14.0258C13.1546 4.58314 12.4098 4.89227 11.7916 5.51054C11.2014 6.12881 10.9063 6.87354 10.9063 7.74473V9.97892H9.09368V12.6768H10.9063V18.9578H13.6042V12.6768H16.3021V9.97892H13.6042V8.16628C13.6042 7.94145 13.6885 7.74473 13.8571 7.57611C14.0258 7.37939 14.2365 7.28103 14.4895 7.28103H16.3021V4.58314ZM1 2C1 1.44772 1.44772 1 2 1H18C18.5523 1 19 1.44772 19 2V17.9578C19 18.5101 18.5523 18.9578 18 18.9578H2C1.44772 18.9578 1 18.5101 1 17.9578V2Z"
                        fill="#121212" />
                </svg>
            </a>
            <a href="" class="link instagram">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.99998 2.62165C12.4031 2.62165 12.6877 2.6308 13.6367 2.6741C14.5142 2.71415 14.9908 2.86077 15.3079 2.98398C15.728 3.14725 16.0278 3.34231 16.3428 3.65723C16.6577 3.97215 16.8528 4.272 17.016 4.69206C17.1392 5.00923 17.2859 5.48577 17.3259 6.36323C17.3692 7.31228 17.3783 7.5969 17.3783 10C17.3783 12.4031 17.3692 12.6878 17.3259 13.6368C17.2859 14.5143 17.1392 14.9908 17.016 15.308C16.8528 15.728 16.6577 16.0279 16.3428 16.3428C16.0278 16.6577 15.728 16.8528 15.3079 17.016C14.9908 17.1393 14.5142 17.2859 13.6367 17.3259C12.6879 17.3692 12.4032 17.3784 9.99998 17.3784C7.59672 17.3784 7.3121 17.3692 6.36323 17.3259C5.48574 17.2859 5.00919 17.1393 4.69206 17.016C4.27196 16.8528 3.97212 16.6577 3.6572 16.3428C3.34227 16.0279 3.14721 15.728 2.98398 15.308C2.86073 14.9908 2.71411 14.5143 2.67406 13.6368C2.63076 12.6878 2.62162 12.4031 2.62162 10C2.62162 7.5969 2.63076 7.31228 2.67406 6.36326C2.71411 5.48577 2.86073 5.00923 2.98398 4.69206C3.14721 4.272 3.34227 3.97215 3.6572 3.65723C3.97212 3.34231 4.27196 3.14725 4.69206 2.98398C5.00919 2.86077 5.48574 2.71415 6.36319 2.6741C7.31224 2.6308 7.59687 2.62165 9.99998 2.62165ZM9.99998 1C7.55571 1 7.24926 1.01036 6.28931 1.05416C5.33133 1.09789 4.67712 1.25001 4.10462 1.47251C3.51279 1.70251 3.01088 2.01025 2.51055 2.51058C2.01021 3.01092 1.70247 3.51283 1.47247 4.10466C1.24997 4.67716 1.09785 5.33137 1.05412 6.28935C1.01032 7.24926 1 7.55575 1 10C1 12.4443 1.01032 12.7508 1.05412 13.7107C1.09785 14.6687 1.24997 15.3229 1.47247 15.8954C1.70247 16.4872 2.01021 16.9891 2.51055 17.4895C3.01088 17.9898 3.51279 18.2975 4.10462 18.5275C4.67712 18.75 5.33133 18.9021 6.28931 18.9459C7.24926 18.9897 7.55571 19 9.99998 19C12.4443 19 12.7507 18.9897 13.7107 18.9459C14.6686 18.9021 15.3228 18.75 15.8953 18.5275C16.4872 18.2975 16.9891 17.9898 17.4894 17.4895C17.9898 16.9891 18.2975 16.4872 18.5275 15.8954C18.75 15.3229 18.9021 14.6687 18.9458 13.7107C18.9896 12.7508 19 12.4443 19 10C19 7.55575 18.9896 7.24926 18.9458 6.28935C18.9021 5.33137 18.75 4.67716 18.5275 4.10466C18.2975 3.51283 17.9898 3.01092 17.4894 2.51058C16.9891 2.01025 16.4872 1.70251 15.8953 1.47251C15.3228 1.25001 14.6686 1.09789 13.7107 1.05416C12.7507 1.01036 12.4443 1 9.99998 1ZM9.99998 5.37838C7.44753 5.37838 5.37835 7.44757 5.37835 10C5.37835 12.5525 7.44753 14.6217 9.99998 14.6217C12.5524 14.6217 14.6216 12.5525 14.6216 10C14.6216 7.44757 12.5524 5.37838 9.99998 5.37838ZM9.99998 13C8.34314 13 6.99996 11.6569 6.99996 10C6.99996 8.34317 8.34314 7 9.99998 7C11.6568 7 13 8.34317 13 10C13 11.6569 11.6568 13 9.99998 13ZM15.8842 5.19579C15.8842 5.79226 15.4007 6.27581 14.8042 6.27581C14.2077 6.27581 13.7242 5.79226 13.7242 5.19579C13.7242 4.59931 14.2077 4.1158 14.8042 4.1158C15.4007 4.1158 15.8842 4.59931 15.8842 5.19579Z"
                        fill="#121212" />
                </svg>
            </a>
            <a href="" class="link tiktok">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.2367 1C13.5336 3.55445 14.9591 5.0774 17.4375 5.23942V8.11251C16.0012 8.25292 14.7431 7.78307 13.2799 6.89739V12.2709C13.2799 19.0972 5.8393 21.2304 2.84795 16.3375C0.925716 13.189 2.10282 7.66426 8.26909 7.44284V10.4725C7.79933 10.5481 7.29717 10.667 6.83821 10.8236C5.46673 11.288 4.68919 12.1575 4.90518 13.6913C5.32094 16.6292 10.7097 17.4986 10.2615 11.7579V1.0054H13.2367V1Z"
                        fill="#121212" />
                </svg>

            </a>
            <a href="" class="link youtube">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.7892 6.69789C18.9297 7.6815 19 8.65105 19 9.60656V10.9555L18.7892 13.8642C18.6768 14.6792 18.4379 15.2693 18.0726 15.6347C17.6792 16.0281 17.089 16.281 16.3021 16.3934C15.5433 16.4496 14.63 16.4918 13.5621 16.5199C12.5222 16.548 11.6651 16.5621 10.9906 16.5621H9.97892C6.85948 16.534 4.82201 16.4778 3.86651 16.3934C3.86651 16.3934 3.7541 16.3794 3.52927 16.3513C3.30445 16.3232 3.12178 16.2951 2.98126 16.267C2.84075 16.2389 2.65808 16.1686 2.43326 16.0562C2.23653 15.9438 2.05386 15.8033 1.88525 15.6347C1.74473 15.466 1.60422 15.2412 1.4637 14.9602C1.35129 14.6511 1.28103 14.3841 1.25293 14.1593L1.16862 13.8642C1.05621 12.8806 1 11.911 1 10.9555V9.60656L1.16862 6.69789C1.28103 5.8829 1.51991 5.29274 1.88525 4.9274C2.27869 4.50585 2.8829 4.25293 3.69789 4.16862C4.45667 4.11241 5.35597 4.07026 6.39578 4.04215C7.4356 4.01405 8.29274 4 8.96721 4H9.97892C12.5082 4 14.6159 4.05621 16.3021 4.16862C17.089 4.25293 17.6792 4.50585 18.0726 4.9274C18.185 5.03981 18.2834 5.18033 18.3677 5.34895C18.452 5.48946 18.5222 5.64403 18.5785 5.81265C18.6347 5.95316 18.6768 6.09368 18.7049 6.23419C18.733 6.37471 18.7611 6.48712 18.7892 6.57143V6.69789ZM12.4239 10.4075L13.0141 10.1124L8.16628 7.58314V12.6417L12.4239 10.4075Z"
                        fill="#121212" />
                </svg>

            </a>
        </div>
    </nav>

    <div class="controls">
        <button class="icon search_icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M13.0108 13.7179C11.7372 14.8278 10.0721 15.5 8.25 15.5C4.24594 15.5 1 12.2541 1 8.25C1 4.24594 4.24594 1 8.25 1C12.2541 1 15.5 4.24594 15.5 8.25C15.5 10.0721 14.8278 11.7372 13.7179 13.0108L19.8536 19.1464L19.1464 19.8536L13.0108 13.7179ZM14.5 8.25C14.5 11.7018 11.7018 14.5 8.25 14.5C4.79822 14.5 2 11.7018 2 8.25C2 4.79822 4.79822 2 8.25 2C11.7018 2 14.5 4.79822 14.5 8.25Z"
                    fill="black" />
            </svg>
        </button>

        <button class="icon profile_icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.5 5C7.5 4.20435 7.81607 3.44129 8.37868 2.87868C8.94129 2.31607 9.70435 2 10.5 2C11.2956 2 12.0587 2.31607 12.6213 2.87868C13.1839 3.44129 13.5 4.20435 13.5 5C13.5 5.79565 13.1839 6.55871 12.6213 7.12132C12.0587 7.68393 11.2956 8 10.5 8C9.70435 8 8.94129 7.68393 8.37868 7.12132C7.81607 6.55871 7.5 5.79565 7.5 5ZM10.5 1C9.43913 1 8.42172 1.42143 7.67157 2.17157C6.92143 2.92172 6.5 3.93913 6.5 5C6.5 6.06087 6.92143 7.07828 7.67157 7.82843C8.42172 8.57857 9.43913 9 10.5 9C11.5609 9 12.5783 8.57857 13.3284 7.82843C14.0786 7.07828 14.5 6.06087 14.5 5C14.5 3.93913 14.0786 2.92172 13.3284 2.17157C12.5783 1.42143 11.5609 1 10.5 1ZM16.08 13.15C17.2 13.97 17.91 15.39 17.99 18H3.01C3.09 15.4 3.8 13.97 4.91 13.15C6.16 12.25 8 12 10.5 12C13 12 14.85 12.26 16.08 13.15ZM10.5 11C8 11 5.85 11.24 4.33 12.35C2.77 13.48 2 15.43 2 18.5V19H19V18.5C19 15.43 18.23 13.48 16.67 12.35C15.15 11.25 13 11 10.5 11Z"
                    fill="black" />
            </svg>
        </button>
        <a href="<?php echo e(route('cart')); ?>" class="home_link">
            <button class="icon cart_icon">
                <svg width="18" height="23" viewBox="0 0 18 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.69157 0.689941C7.4318 0.689941 6.22361 1.19039 5.33282 2.08118C4.44202 2.97198 3.94157 4.18016 3.94157 5.43994V5.99994H0.781574L0.0115738 17.5999C-0.0350324 18.2837 0.0594434 18.9698 0.289133 19.6156C0.518823 20.2613 0.878821 20.853 1.34677 21.3537C1.81472 21.8545 2.38063 22.2537 3.00936 22.5266C3.63808 22.7995 4.31619 22.9402 5.00157 22.9399H12.3816C13.0661 22.9401 13.7433 22.7996 14.3713 22.5274C14.9993 22.2551 15.5647 21.8568 16.0325 21.3571C16.5003 20.8575 16.8605 20.2671 17.0909 19.6225C17.3212 18.9779 17.4168 18.2929 17.3716 17.6099L16.6016 6.00994H13.4416V5.43994C13.4416 4.81616 13.3187 4.19849 13.08 3.6222C12.8413 3.0459 12.4914 2.52226 12.0503 2.08118C11.6093 1.64011 11.0856 1.29022 10.5093 1.05151C9.93302 0.812804 9.31535 0.689941 8.69157 0.689941ZM12.4416 5.43994V5.99994H4.94157V5.43994C4.94157 4.44538 5.33666 3.49155 6.03992 2.78829C6.74318 2.08503 7.69701 1.68994 8.69157 1.68994C9.68614 1.68994 10.64 2.08503 11.3432 2.78829C12.0465 3.49155 12.4416 4.44538 12.4416 5.43994ZM12.4416 6.99994H4.94157V7.55994C4.94157 8.5545 5.33666 9.50833 6.03992 10.2116C6.74318 10.9149 7.69701 11.3099 8.69157 11.3099C9.68614 11.3099 10.64 10.9149 11.3432 10.2116C12.0465 9.50833 12.4416 8.5545 12.4416 7.55994V6.99994ZM3.94157 7.55994V6.99994H1.72157L1.00157 17.6699C0.964529 18.2175 1.04055 18.7668 1.22492 19.2837C1.40928 19.8006 1.69804 20.2741 2.07324 20.6746C2.44843 21.0751 2.90202 21.3941 3.40581 21.6118C3.90959 21.8295 4.45277 21.9412 5.00157 21.9399H12.3816C12.9295 21.9398 13.4716 21.8271 13.9742 21.6088C14.4768 21.3905 14.9292 21.0713 15.3033 20.6709C15.6774 20.2706 15.9653 19.7976 16.1491 19.2814C16.3328 18.7651 16.4086 18.2166 16.3716 17.6699L15.6616 6.99994H13.4416V7.55994C13.4416 8.81972 12.9411 10.0279 12.0503 10.9187C11.1595 11.8095 9.95135 12.3099 8.69157 12.3099C7.4318 12.3099 6.22361 11.8095 5.33282 10.9187C4.44202 10.0279 3.94157 8.81972 3.94157 7.55994Z"
                        fill="black" />
                </svg>
        </a>
        </button>
    </div>
</div>

<script src="<?php echo e(asset('js/navbarToggle.js')); ?>"></script>
<?php /**PATH /home/kalvisreinis/Desktop/Project_KGK/KGK-repository/resources/views/components/navbar.blade.php ENDPATH**/ ?>