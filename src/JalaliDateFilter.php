<?php

namespace Xamani\JalaliDateFilter;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class JalaliDateFilter extends Filter
{
    public $component = 'jalali-date-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param \Illuminate\Contracts\Database\Eloquent\Builder   $query
     * @param mixed                                   $value
     *
     * @return \Illuminate\Contracts\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, Builder $query, mixed $value): Builder
    {
        return $query;
    }

    /**
     * Set datePicker Color. See https://talkhabi.github.io/vue-persian-datetime-picker/guide/theme.
     *
     * @param $color
     *
     * @return $this
     */
    public function color($color)
    {
        return $this->withMeta(compact('color'));
    }

    /**
     * Set datePicker Locale. See https://talkhabi.github.io/vue-persian-datetime-picker/guide/localization.
     *
     * @param $locale
     *
     * @return $this
     */
    public function locale($locale)
    {
        return $this->withMeta(compact('locale'));
    }

    /**
     * Set datePicker format (Jalali). Example: jYYYY/jMM/jDD or jYYYY/jMM/jDD HH:mm
     *
     * @param $format
     *
     * @return $this
     */
    public function format($format)
    {
        return $this->withMeta(compact('format'));
    }

    /**
     * Set calendar type.
     *
     * @param $type string date|datetime
     *
     * @return $this
     */
    public function type($type)
    {
        return $this->withMeta(compact('type'));
    }
}
