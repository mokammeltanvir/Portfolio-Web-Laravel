<script src="{{ asset('frontend/assets') }}/js/vendor/jquery-min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/assets') }}/js/contact-form.js"></script>
<script src="{{ asset('frontend/assets') }}/js/jquery-plugin-collection.js"></script>
<script src="{{ asset('frontend/assets') }}/js/vendor/modernizr.js"></script>
<script src="{{ asset('frontend/assets') }}/js/main.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Show dynamic validation errors -->
<script>
    @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            toastr.error("{{$error}}",)
        @endforeach
    @endif

</script>

<script>
    $(document).ready(function(){
        // Csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // sweet alert for delete
        $('body').on('click', '.delete-item', function(e){
            e.preventDefault();
            let deleteUrl = $(this).attr('href');

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
                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,
                        success: function(data){
                            if(data.status == 'error'){
                                Swal.fire(
                                'You can not delete!',
                                'This category contain items cant be deleted!',
                                'error'
                            )
                            }else {
                                Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                                window.location.reload();
                            }
                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }
                    })
                }
            })
        })
    })
</script>

@stack('scripts')

