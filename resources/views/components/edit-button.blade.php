<div class="col-sm-12 mt-4 text-center">
    <button type="submit" id="submitButton" class="btn btn-info"> <i class="fa-solid fa-file-pen me-2"></i>تعديل
        البيانات</button>
</div><!--end col-->


@push('js')
    <script>
        // حل بديل أكثر موثوقية
        function disableButton() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التعديل';

            // إرسال النموذج تلقائيًا بعد تعطيل الزر
            document.getElementById('editForm').submit();
        }

        // أو يمكنك استخدام هذا الحدث
        document.getElementById('editForm').addEventListener('submit', function() {
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التعديل';
        });
    </script>
@endpush
