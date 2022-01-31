<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        window.laravel = [
            baseurl = '{{ url('/') }}'
        ]
    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="shortcut icon" href="{{asset(settings()->favicon)}}" type="image/x-icon">
    <title>Make Your Furniture | Woodo</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <style>
        .preloader {
            position: fixed;
            height: 100%;
            width: 100%;
            background: #ffffffeb;
            top: 0;
            z-index: 12;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('components.backend.header')
    <div class="app-main">
        @include('components.backend.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('main-content')
            </div>
            {{--         @include('components.backend.footer')--}}
        </div>
    </div>
</div>
<div class="preloader">
    <h5 class="text-danger"><i class="fa fa-cog  fa-spin"></i>Loading...</h5>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('assets/scripts/main.js') }}" defer></script>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	@if(Session::has('message'))
	<script>
		var toast=toastr["{{Session::get('type')}}"]("{{Session::get('message')}}")
		toast.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "slideIn",
			"hideMethod": "slideOut"
			}

	</script>
	@endif
    <script>
    setTimeout(() => {
        document.querySelector('.preloader').style.display = 'none'
    }, 1000)
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function confirmDelete(event){
			Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			if (result.isConfirmed) {
				location.href=event.target.dataset['link']
				Swal.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				)
			}
		})
		}
	</script>
    @yield('scripts')
</body>

</html>
