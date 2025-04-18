@props(['chartKey'])
<figure {{ $attributes->class('chart')->merge([
    'x-data' => 'chart',
]) }}>
    <div class="chart-container"
         id="{{ $chartKey }}"
         x-on:export-chart.document="exportChart"
         x-ref="container"></div>
    {{ $slot }}
</figure>
