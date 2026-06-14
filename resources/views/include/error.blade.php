@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert bg-danger-subtle fade show mb-4" role="alert">
            <div class="d-flex">
                <div class="text-danger mb-0">
                    <span class="alert-icon d-inline-block me-2">
                        <i data-feather="alert-circle"></i>
                    </span>
                </div>

                <div class="flex-grow-1">
                    <p class="alert-title text-danger mb-0">
                        <span class="fw-semibold">Ralat!</span>
                        {{ $error }}
                    </p>
                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close">
                </button>
            </div>
        </div>
    @endforeach
@endif