<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pertemuan 4_5026241043_PEMBUATAN LAYOUT DENGAN GRID SYSTEM MENGGUNAKAN BOOTSTRAP 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background-color: #c6c6c6;
            overflow: hidden;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: 'Open Sans', sans-serif;
            padding: 30px;
            box-sizing: border-box;
        }

        .content-wrapper {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            border-radius: 0;
            box-shadow: none;
            overflow: hidden;
        }

        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 5px 0;
        }

        h1.display-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            letter-spacing: 5px;
            font-size: 3rem;
            color: #000000;
            margin-bottom: 45px;
            text-align: center;
            text-transform: uppercase;
        }

        .testimonial-img {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 50%;
            background-color: #eee;
        }

        .testimonial-text {
            font-style: italic;
            color: #000;
            font-size: 1.4rem;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .client-name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 2px;
            font-size: 1.3rem;
        }

        .client-role {
            font-size: 1.1rem;
            color: #555;
            font-weight: 600;
        }

        .logo-section {
            background-color: #979a9e;
            padding: 25px 0;
            width: 100%;
        }

        .logo-row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo-item {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90px;
            padding: 0 10px;
        }

        .client-logo,
        .logo-item svg {
            height: 100px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            mix-blend-mode: multiply;
            transition: none;
        }

        .logo-item svg {
            fill: #333;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">
        <div class="main-content">
            <div class="container">
                <h1 class="display-title">OUR CLIENTS LOVE US</h1>
                <div class="row">
                    <div class="col-md-6 mb-4 px-lg-5">
                        <div class="media align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnBCF6rhiNBkQkGBLTJ0typxdq5A1JyV_5AQ&s"
                                class="mr-4 testimonial-img">
                            <div class="media-body">
                                <p class="testimonial-text">"Sistem grid pada platform ini sangat membantu skalabilitas
                                    tampilan antarmuka kami secara efisien."</p>
                                <h6 class="client-name">Nadiem Makarim</h6>
                                <p class="client-role">Founder Gojek</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 px-lg-5">
                        <div class="media align-items-center">
                            <img src="https://foto.kontan.co.id/VlF5g-WaLyGsr006Xd-mN99Zj1c=/smart/filters:format(webp)/2024/11/13/967987787.jpg"
                                class="mr-4 testimonial-img">
                            <div class="media-body">
                                <p class="testimonial-text">"Algoritma penyajian konten yang responsif sangat krusial
                                    bagi pengalaman pengguna aplikasi kami."</p>
                                <h6 class="client-name">Zhang Yiming</h6>
                                <p class="client-role">Founder TikTok</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 px-lg-5">
                        <div class="media align-items-center">
                            <img src="https://c.inilah.com/reborn/2024/10/Profil_Jack_Ma_Foto_Marlene_Awaad_via_Bloomberg_ece2de0d47.jpg"
                                class="mr-4 testimonial-img">
                            <div class="media-body">
                                <p class="testimonial-text">"Kemudahan navigasi adalah fondasi utama dalam membangun
                                    ekosistem e-commerce global."</p>
                                <h6 class="client-name">Jack Ma</h6>
                                <p class="client-role">Founder Alibaba</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 px-lg-5">
                        <div class="media align-items-center">
                            <img src="https://jhonnythiodoran.id/wp-content/uploads/2025/11/Gizmologi.jpg"
                                class="mr-4 testimonial-img">
                            <div class="media-body">
                                <p class="testimonial-text">"Kreativitas dalam penyajian layout sangat krusial dalam
                                    membangun kepercayaan ekonomi digital."</p>
                                <h6 class="client-name">Achmad Zaky</h6>
                                <p class="client-role">Founder Bukalapak</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-section">
            <div class="logo-row">
                <div class="logo-item">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Gojek</title>
                        <path
                            d="M12.072.713a15.38 15.38 0 0 0-.643.011C5.317.998.344 5.835.017 11.818c-.266 4.913 2.548 9.21 6.723 11.204 1.557.744 3.405-.19 3.706-1.861.203-1.126-.382-2.241-1.429-2.742-2.373-1.139-3.966-3.602-3.778-6.406.22-3.28 2.931-5.945 6.279-6.171 3.959-.267 7.257 2.797 7.257 6.619 0 2.623-1.553 4.888-3.809 5.965a2.511 2.511 0 0 0-1.395 2.706l.011.056c.295 1.644 2.111 2.578 3.643 1.852C21.233 21.139 24 17.117 24 12.461 23.996 5.995 18.664.749 12.072.711v.002Zm-.061 7.614c-2.331 0-4.225 1.856-4.225 4.139 0 2.282 1.894 4.137 4.225 4.137 2.33 0 4.225-1.855 4.225-4.137 0-2.283-1.895-4.139-4.225-4.139Z" />
                    </svg>
                </div>
                <div class="logo-item">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>TikTok</title>
                        <path
                            d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                    </svg>
                </div>
                <div class="logo-item">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Alibaba.com</title>
                        <path
                            d="M14.391 16.22c-.963.044-.865-.459-.302-1.234 1.32-1.768 3.82-4.236 3.906-5.982.151-2.283-2.143-3.026-4.501-3.004-1.645.022-3.344.492-4.501.906C5 8.315 2.489 10.576.909 13.076-.768 15.554-.216 17.923 3.322 18c2.716-.109 4.48-.862 6.32-1.802.01 0-5.086 1.453-6.958.383l-.008-.002c-.193-.11-.404-.264-.457-.683-.012-.885 1.46-1.802 2.283-2.097v-1.533a5.374 5.374 0 0 0 1.955.366 5.378 5.378 0 0 0 3.472-1.265c.037.13.056.278.044.447h.371c.048-.394-.172-.706-.172-.706-.333-.529-.915-.52-.915-.52s.315.137.529.466a4.953 4.953 0 0 1-4.665.932l1.21-1.2-.336-.874c2.435-.852 4.48-1.507 7.812-2.085l-.746-.624.389-.24c2.01.568 3.325.985 3.253 2.051a2.672 2.672 0 0 1-.202.611c-.584 1.158-2.326 3.09-3.029 3.898-.465.535-.92 1.06-1.245 1.562-.335.503-.54.971-.551 1.42.043 3.504 10.334-1.64 12.324-3.003-2.943 1.266-6.113 2.489-9.609 2.718Z" />
                    </svg>
                </div>
                <div class="logo-item">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Bukalapak</title>
                        <path
                            d="M10.976 23.845a3.158 3.158 0 1 1-1.95-6.008 3.158 3.158 0 0 1 1.95 6.008Zm6.554-2.883c4.047-1.315 7.315-5.981 5.689-10.984-1.626-5.003-7.012-6.856-11.058-5.541a1.89 1.89 0 0 0-1.252 2.249l.414 1.682a1.892 1.892 0 0 0 2.42 1.348l.162-.053c1.861-.606 3.592.504 4.071 2.019.505 1.507-.244 3.422-2.106 4.027l-.162.054a1.891 1.891 0 0 0-1.166 2.512l.653 1.604a1.89 1.89 0 0 0 2.335 1.083Zm-6.962-7.982L7.841 1.752A2.3 2.3 0 0 0 4.897.113l-2.952.959A2.3 2.3 0 0 0 .526 4.128L4.92 14.815a2.3 2.3 0 0 0 2.841 1.318l1.285-.417a2.298 2.298 0 0 0 1.522-2.736Z" />
                    </svg>
                </div>
                <div class="logo-item">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Shopee</title>
                        <path
                            d="M15.9414 17.9633c.229-1.879-.981-3.077-4.1758-4.0969-1.548-.528-2.277-1.22-2.26-2.1719.065-1.056 1.048-1.825 2.352-1.85a5.2898 5.2898 0 0 1 2.8838.89c.116.072.197.06.263-.039.09-.145.315-.494.39-.62.051-.081.061-.187-.068-.281-.185-.1369-.704-.4149-.983-.5319a6.4697 6.4697 0 0 0-2.5118-.514c-1.909.008-3.4129 1.215-3.5389 2.826-.082 1.1629.494 2.1078 1.73 2.8278.262.152 1.6799.716 2.2438.892 1.774.552 2.695 1.5419 2.478 2.6969-.197 1.047-1.299 1.7239-2.818 1.7439-1.2039-.046-2.2878-.537-3.1278-1.19l-.141-.11c-.104-.08-.218-.075-.287.03-.05.077-.376.547-.458.67-.077.108-.035.168.045.234.35.293.817.613 1.134.775a6.7097 6.7097 0 0 0 2.8289.727 4.9048 4.9048 0 0 0 2.0759-.354c1.095-.465 1.8029-1.394 1.9449-2.554zM11.9986 1.4009c-2.068 0-3.7539 1.95-3.8329 4.3899h7.6657c-.08-2.44-1.765-4.3899-3.8328-4.3899zm7.8516 22.5981-.08.001-15.7843-.002c-1.074-.04-1.863-.91-1.971-1.991l-.01-.195L1.298 6.2858a.459.459 0 0 1 .45-.494h4.9748C6.8448 2.568 9.1607 0 11.9996 0c2.8388 0 5.1537 2.5689 5.2757 5.7898h4.9678a.459.459 0 0 1 .458.483l-.773 15.5883-.007.131c-.094 1.094-.979 1.9769-2.0709 2.0059z" />
                    </svg>
                </div>
                <div class="logo-item">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Blibli</title>
                        <path
                            d="M5.8018 5.9457c2.4792.2543 4.3228.3814 6.1663.3814l-.89-2.9243a1.0171 1.0171 0 0 0-1.2714-.6357l-3.6235.9536c-.5721.1271-.89.7629-.6357 1.2714l.1907.89zm12.5234 0V3.9114c.0636-.6357-.6357-1.0807-1.2714-.6993l-3.6871 2.4157c-.2543.1272-.445.3814-.5086.6357 1.5257 0 3.1785-.1271 5.467-.3178zm-4.3228-2.0343a1.9707 1.9707 0 1 0-.9536-3.8142 1.9707 1.9707 0 1 0 .9536 3.8142Zm5.1492 2.6067v.0633h-.1266c-3.0514.3178-5.0857.4445-6.9928.4445-2.0343 0-4.0057-.1267-7.1207-.4445h-.0633c-.6357 0-1.0171.3812-.9536 1.0169 1.0172 6.0392 1.0167 9.7901-.509 15.1936C3.1949 23.364 3.7034 24 4.339 24H19.724c.5721 0 1.081-.5726.8902-1.1448a30.1325 30.1325 0 0 1-.509-15.257c.1271-.572-.3179-1.0801-.9536-1.0801Zm-10.298 3.623c.445 0 .7624.3178.7624.6357v.0633c0 .3814-.3173.7003-.7623.7003a.6357.6357 0 0 1-.6357-.7003.6357.6357 0 0 1 .6357-.699zm6.2292 0c.3815 0 .7636.3176.7636.699 0 .3814-.3821.7003-.7636.7003a.6357.6357 0 0 1-.6357-.7636.6357.6357 0 0 1 .6357-.6357Zm-6.6116 2.6061c.3179 0 .5091.2548.5091.5091a2.9243 2.9243 0 0 0 2.9873 2.924c2.2886 0 3.052-1.9704 3.052-2.924 0-.2543.1901-.509.4444-.509s.509.2547.509.509c0 1.2714-.954 3.8142-4.0054 3.8142-2.9878 0-3.9409-2.5428-3.9409-3.8142 0-.2543.1903-.509.4445-.509z" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
