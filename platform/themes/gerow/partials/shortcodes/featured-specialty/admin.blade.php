<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect(
            'style',
            [
                'style-1' => __('Style :number', ['number' => 1]),
                'style-2' => __('Style :number', ['number' => 2]),
            ],
            Arr::get($attributes, 'style'),
        ) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input
            class="form-control"
            name="title"
            value="{{ Arr::get($attributes, 'title') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input
            class="form-control"
            name="subtitle"
            value="{{ Arr::get($attributes, 'subtitle') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <textarea
            class="form-control"
            name="description"
        >{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image :number', ['number' => 1]) }}</label>
        {!! Form::mediaImage('image_1', Arr::get($attributes, 'image_1')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image') }}</label>
        {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
        {!! Form::mediaImage('background_image_1', Arr::get($attributes, 'background_image_1')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image :number', ['number' => 2]) }}</label>
        {!! Form::mediaImage('background_image_2', Arr::get($attributes, 'background_image_2')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#00194C'), [
            'class' => 'form-control',
        ]) !!}
    </div>

    <div class="mb-3">
        {!! Shortcode::fields()->tabs(
            [
                'title' => [
                    'title' => __('Title'),
                    'required' => true,
                ],
                'description' => [
                    'type' => 'textarea',
                    'title' => __('Description'),
                    'required' => false,
                ],
            ],
            $attributes,
        ) !!}
    </div>
</section>
