@extends('layout')
@section('imports')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/donation.css">
@endsection

@section('main')
    <section class="container">
        <h1>DONATION</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Donation</li>
            </ol>
        </nav>
    </section>
    <section class="container d-body">
        <svg
            id="Layer_1"
            data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1671.06 582.24"
        >
            <defs>
                <style>
                    .cls-1 {
                        font-size: 47.38px;
                        font-family: NexaBold, Nexa Bold;
                    }
                </style>
            </defs>
            <path
                d="M1267.42,1324.66l97.63-7.06.21,1.6c-9.41,1.37-18.82,2.78-28.24,4.1q-63.49,8.9-127,17.74c-30.61,4.26-61.23,8.4-91.84,12.68-36.37,5.09-72.72,10.31-109.08,15.42-26.18,3.67-52.37,7.25-78.55,10.89q-55.15,7.65-110.3,15.33-60.06,8.36-120.12,16.72c-50.8,7.13-101.59,14.4-152.39,21.5-36,5-72,9.8-108,14.83-50.62,7.08-101.21,14.35-151.82,21.42-36,5-72,9.8-108,14.84-45.23,6.33-90.44,12.88-135.67,19.21-27.14,3.81-54.32,7.31-81.47,11.08-35.61,5-71.2,10.06-106.81,15-31.18,4.37-62.38,8.6-93.56,13-21.36,3-42.69,6.14-64,9.17a31,31,0,0,1-4.12,0c20.43-194,40.81-387.41,61.32-582.18a58.82,58.82,0,0,1,4.63,3.66q52.25,52.22,104.51,104.4c3.06,3,4,6.16,3.81,10.38q-5.82,99.66-11.39,199.34-3.69,65.87-7.14,131.75c-.1,1.87,0,3.74,0,6.15,16.09-1.25,31.54-2.33,47-3.79,1.72-.16,3.59-2.16,4.81-3.75q67.76-89.24,135.38-178.54c10.11-13.34,20.07-26.79,30.58-39.79,1.94-2.4,6.14-3.79,9.44-4.12,14.31-1.43,28.67-2.24,43-3.36,22-1.72,44.09-3.5,68-5.41L-1.11,1414.73c10.21-.59,18.79-1,27.36-1.6q40.46-2.82,80.89-5.79c11-.79,22.1-1.74,33.16-2.42,3.82-.23,5.42-2.15,6.17-5.64q10.28-47.88,20.68-95.74,11.43-52.41,23.09-104.77c2.76-12.25,3.06-12.24,15.88-13.23q75.57-5.8,151.14-11.54,86.91-6.7,173.82-13.49,83.43-6.4,166.87-12.65c6.9-.52,13.79-1.23,21.54-1.92-2.68,11.19-5.11,21.32-7.51,31.47-2.24,9.45-4.51,18.9-6.63,28.39-.75,3.41-2,5.13-6.06,5.42-26.93,1.9-53.83,4.29-80.77,6.19-4.75.33-6.16,2.39-7.06,6.57-6.28,29.07-12.77,58.09-19.2,87.13q-6.35,28.76-12.67,57.5a41.79,41.79,0,0,0-.36,5l142.52-10.12c-9.67-6-15.36-14.79-20.23-24.37a26.6,26.6,0,0,1-2.24-19.16q18.76-78.24,37.29-156.54c1.12-4.72,2.71-9.37,3.43-14.16.59-3.93,2.52-5,6.15-5.3,25.59-1.92,51.16-4,76.73-6q60.15-4.79,120.29-9.6,35.73-2.86,71.47-5.75c1.7-.14,3.41,0,6.12,0-2,9.59-3.87,18.44-5.79,27.28-1.66,7.6-3.84,15.12-5,22.79-.78,5.36-3.31,7.13-8.32,7.47-21.14,1.42-42.27,3.05-63.4,4.65-34.3,2.61-68.59,5.31-102.9,7.82-3.74.27-5.54,1.71-6.31,5.34q-9.23,43.33-18.63,86.64c-.86,4-1.84,8-2.67,12-1.42,6.75,2.18,11.08,9,10.5,29.63-2.5,59.25-5.18,88.89-7.66,25.18-2.1,50.38-4,75.57-6,1.67-.13,3.36,0,5.67,0l-10.6,50.57c7.17,2.08,8,1.47,9.39-5.2q11.6-54.16,23.33-108.3c.08-.39.2-.76.28-1.14,2.95-13.56,2.95-13.49,16.6-14.5q41.88-3.1,83.74-6.31c1.87-.14,3.75,0,6.3,0-5.67,25.25-11.18,49.78-16.93,75.4,10.08-.68,19.1-1.23,28.12-1.91,21.31-1.62,42.62-3.36,63.93-5,7.16-.53,12.26-3.8,14.14-10.88,5.42-20.47,10.5-41,15.59-61.58,2.61-10.56,4.94-21.2,7.46-31.79,1.8-7.56.51-9.18-7.27-8.57q-63.35,5-126.69,10-35.17,2.79-70.33,5.6c-1.47.12-3,0-5.37,0,1.16-6.26,2.12-11.73,3.18-17.18,2.31-11.82,4.83-23.61,6.91-35.47.74-4.19,2.56-5.81,6.79-6.13,24.81-1.86,49.59-4,74.39-6q65.38-5.11,130.78-10.08c17.44-1.34,34.87-2.7,52.32-3.8a16.57,16.57,0,0,1,7.76,1.69c16.2,7.69,22.78,21.71,22.07,38.5-.53,12.28-3.46,24.58-6.29,36.64-8.22,35-16.41,70-25.69,104.75A93.3,93.3,0,0,1,1267.42,1324.66ZM245.11,1397.33c14.05-.95,27.18-1.8,40.31-2.74,31-2.21,62-4.52,93.06-6.71q51.19-3.63,102.4-7.07c4.17-.27,6.09-1.91,6.9-6.07,2.47-12.58,5.3-25.09,8-37.61q10.48-48.44,20.95-96.87c1-4.77,1.75-9.62,2.71-15l-90.3,6.94c.71-4.08,1.3-7.4,2-11.5-3.46.21-6.31.33-9.15.56-12.4,1-24.79,2.07-37.18,3-31.57,2.49-63.13,5-94.71,7.25-4.09.29-5.37,2.12-6.16,5.44-2,8.51-4.13,17-6.2,25.49q-13.83,56.61-27.65,113.21C248.43,1382.62,246.9,1389.56,245.11,1397.33Z"
                transform="translate(305.81 -969.99)"
            />
            <path
                d="M-114.41,1210.87c5.66-.67,10.59-1.44,15.55-1.82q36.3-2.83,72.63-5.46c11.59-.83,22.21,7,26.2,19.11,1.58,4.79,2.69,9.79,4.79,14.33,1.8,3.91.7,6.44-1.7,9.43q-36.76,45.64-73.36,91.43a23.33,23.33,0,0,1-2,1.55C-86.36,1296.63-100.21,1254.26-114.41,1210.87Z"
                transform="translate(305.81 -969.99)"
            />
            <path
                d="M989.06,1208.05c-3.64,12.87-6.86,24.82-10.41,36.68-4.17,13.92-4.28,14-19,15.19q-60.09,4.74-120.22,9.24c-1.82.13-3.66,0-6.31,0,4.57-16.52,8.74-32,13.3-47.41.45-1.5,3.24-3.12,5.06-3.27,26.32-2.22,52.66-4.18,79-6.21l54.61-4.22C986,1208,987,1208.05,989.06,1208.05Z"
                transform="translate(305.81 -969.99)"
            />
            <path
                d="M447.19,1245.1c-4.09,15.7-7.71,30.37-11.77,44.92-3.57,12.79-3.82,12.33-17.49,13.26-35.44,2.39-70.84,5.17-106.26,7.76-6.93.51-13.87.84-21.78,1.3,2.08-8.56,4-16.56,6-24.53,2.16-8.67,4.49-17.29,6.54-26,.92-3.9,2.71-5.74,7.05-6.06,30.39-2.26,60.76-4.8,91.14-7.28,13.15-1.08,26.28-2.28,39.43-3.37C442.08,1245,444.18,1245.1,447.19,1245.1Z"
                transform="translate(305.81 -969.99)"
            />
            <text
                class="cls-1"
                transform="matrix(1.02, -0.08, 0.08, 1, 190.62, 209)"
            >
                AUTO DETAILING
            </text>
        </svg>
   <h2> Our mission is to make an impact for those who have been impacted. </h2>
        <div class="d-text">
        <p>   We are proudly donante for a non profit organization </p>
        <p> thousands of people like you help us stand up for recovred the impacted people </p>
        <p>  we rely on donation for those people and we will be happy if you would be part of it </p>
        </div>

        <a class="btn btn-danger">
            DONATE
        </a>
    </section>
@endsection
