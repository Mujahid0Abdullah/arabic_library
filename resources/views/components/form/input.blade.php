
@props([
 'lable' => null,
 'type' => 'text',
 'name',
 'placeholder'=> 'No Placeholder',
 'value',


])

@if ($lable)
<label class="col-lg-4 col-form-label required fw-semibold fs-6">{{ $lable }}</label>
@endif


<!--end::Label-->
<!--begin::Col-->
<div class="col-lg-8">
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-lg-6 fv-row">
            <input type="{{ $type }}" name="{{ $name }}" class=" mt-2 form-control form-control-lg form-control-solid mb-3 mb-lg-0
                                    @error($name)
                                         is-invalid
                                    @enderror
                                    " placeholder="{{ $placeholder }}" value="{{ old($name) }}" />
            @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror

        </div>




    </div>

</div>
