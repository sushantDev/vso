<script>
    @if (session('status'))
    swal('Info!', '{!!  session('status') !!}', 'info');
    @endif
    @if (session('success'))
    swal('Success!', '{!!  session('success') !!}', 'success');
    @endif
    @if (session('warning'))
    swal('Warning!', '{!!  session('warning') !!}', 'warning');
      @endif
    var errors = '';
    @if ($errors->all())
      @foreach($errors->all() as $error)
        errors += '{!! $error !!}\n';
      @endforeach
      swal('Warning!', errors, 'warning');
    @endif
</script>