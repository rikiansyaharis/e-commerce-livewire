<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('failed'))
<script>

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $message }}',
    })
</script>
@endif

@if ($message = Session::get('success'))
<script>
        Swal.fire({
        icon: 'success',
        title: 'Success...',
        text: '{{ $message }}',
    })
</script>
@endif


{{-- @if ($message = Session::get('successfully'))
<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: '{{ $message }}',
    width: '100px',
    showConfirmButton: false,
    timer: 2000
})
</script>
@endif --}}
