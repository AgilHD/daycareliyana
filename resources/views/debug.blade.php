<!DOCTYPE html>
<html>
<head>
    <title>Debug Vite Assets</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Debug Vite Assets</h1>
    
    <h2>Environment Variables:</h2>
    <ul>
        <li>APP_ENV: {{ config('app.env') }}</li>
        <li>APP_DEBUG: {{ config('app.debug') ? 'true' : 'false' }}</li>
        <li>APP_URL: {{ config('app.url') }}</li>
    </ul>
    
    <h2>Asset Paths:</h2>
    <ul>
        <li>CSS File: {{ asset('build/assets/app-GPDujWkz.css') }}</li>
        <li>JS File: {{ asset('build/assets/app-DtCVKgHt.js') }}</li>
        <li>Manifest: {{ asset('build/manifest.json') }}</li>
    </ul>
    
    <h2>Vite Helper Test:</h2>
    <div id="vite-test">
        <p>If you see this styled with Tailwind, Vite is working!</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Test Button
        </button>
    </div>
    
    <h2>Manual Asset Loading Test:</h2>
    <link rel="stylesheet" href="{{ asset('build/assets/app-GPDujWkz.css') }}">
    <script src="{{ asset('build/assets/app-DtCVKgHt.js') }}"></script>
    
    <div id="manual-test">
        <p>Manual asset loading test</p>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Manual Test Button
        </button>
    </div>
</body>
</html>
