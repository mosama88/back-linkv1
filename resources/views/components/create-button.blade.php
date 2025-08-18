<div class="col-sm-12 mt-4 text-center">
    <button type="submit" id="submitButton" class="btn btn-primary"> <i class="fa-solid fa-floppy-disk me-2"></i>تأكيد
        البيانات</button>
</div><!--end col-->


@push('js')



    <script>
        // حل بديل أكثر موثوقية
        function disableButton() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الحفظ';

            // إرسال النموذج تلقائيًا بعد تعطيل الزر
            document.getElementById('storeForm').submit();
        }

        // أو يمكنك استخدام هذا الحدث
        document.getElementById('storeForm').addEventListener('submit', function() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الحفظ';
        });
    </script>

@endpush
