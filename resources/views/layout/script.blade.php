
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

{{-- bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

{{-- select picker --}}
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


{{-- daysjs --}}
<script src="https://unpkg.com/dayjs@1.11.8/dayjs.min.js"></script>
<script src="https://unpkg.com/dayjs@1.11.8/locale/id.js"></script>
<script src="https://unpkg.com/dayjs@1.11.8/plugin/relativeTime.js"></script>

<script src="{{url('/assets/js/function.js')}}"></script>
<script src="{{url('/assets/js/main.js')}}"></script>

{{-- 
    Toast for notification
    --}}
<script>
    
    const toastTrigger = document.getElementById('liveToastBtn');
    const toastLive = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastLive);
    let toastCategory = document.getElementById('toastCategory');
    let toastBody = document.getElementById('toastBody');

    @if(session('success'))
        let textBody = "{{ session('success') }}";
        let textCategory = "Success!";
        console.log(textBody);
        toastBody.innerText = textBody;
        toastCategory.innerText = textCategory;
        toastLive.classList.add('bg-success', 'text-white');
        toast.show();
    @endif
    @if(session('danger'))
        let textBody = "{{ session('danger') }}";
        let textCategory = "Error!";
        console.log(textBody);
        toastBody.innerText = textBody;
        toastCategory.innerText = textCategory;
        toastLive.classList.add('bg-danger', 'text-white');
        toast.show();
    @endif
</script>