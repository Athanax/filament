@props([
    'actions',
    'fullWidth' => false,
])

<x-filament-actions::actions
    :actions="$actions"
    :alignment="config('filament.layout.forms.actions.alignment')"
    :full-width="$fullWidth"
    class="filament-form-actions"
/>
