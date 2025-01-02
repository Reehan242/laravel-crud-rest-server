@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-center">Dokumentasi Penggunaan API CRUD Post</h1>
                <p class="mt-4 mb-4 text-center">API ini dapat digunakan untuk melihat data semua post, menambah data post
                    baru, mengubah data post yang sudah ada, dan menghapus data post yang ada di Raihan Rest Server ini.
                    Atau secara sederhana API ini digunakan untuk mengelola data post di web ini.</p>
                <hr>
                <h4 class="mt-4 mb-3">Terdapat 5 Endpoint yang dapat digunakan.</h4>
                <p class="mt-2 text-secondary fw-bold">1. Untuk menampilkan semua post dapat menggunakan :</p>
                <div class="bg-dark py-2">
                    <code class="text-light ms-5">
                        GET localhost:8000/api/posts
                    </code>
                </div>
                <p>Dengan method GET dan tanpa parameter, semua data post yang ada akan ditampilkan.</p>
                <p>Contoh response :</p>
                <div class="bg-dark py-1">
                    <pre class="text-light mt-2">
    {
    "success": true,
    "data": [
        {
            "id": 1,
            "title": "Test Ini Post Pertama",
            "body": "Ini body post pertama ",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "title": "Test Ini Post Ke 2",
            "body": "Ini Body Post Ke 2",
            "created_at": null,
            "updated_at": null
        }
    ]
    }                       
</pre>
                </div>
                <p class="mt-5 text-secondary fw-bold">2. Untuk menampilkan post dengan id tertentu dapat menggunakan :</p>
                <div class="bg-dark py-2">
                    <code class="text-light ms-5">
                        GET localhost:8000/api/posts/id
                    </code>
                </div>
                <p>Dengan method GET dan diakhir endpoint beri "id" dari post yang ingin ditampilkan.</p>
                <p>Contoh penggunaan untuk menampilkan post dengan "id" = 1 : </p>
                <div class="bg-dark py-2">
                    <code class="text-light ms-5">
                        localhost:8000/api/posts/1
                    </code>
                </div>
                <p>Contoh response :</p>
                <div class="bg-dark py-1">
                    <pre class="text-light mt-2">
    {
        "success": true,
        "data": [
            {
                "id": 1,
                "title": "Test Ini Post Pertama",
                "body": "Ini body post pertama ",
                "created_at": null,
                "updated_at": null
            }
        ]
    }                        </pre>
                </div>

                <p class="mt-5 text-secondary fw-bold">3. Untuk menambahkan post dapat menggunakan :</p>
                <div class="bg-dark py-2">
                    <code class="text-light ms-5">
                        POST localhost:8000/api/posts
                    </code>
                </div>
                <p>Dengan method POST dan tanpa parameter, lalu pada body endpoint berikan value untuk field 'title' dan
                    'body'.</p>
                <p>Contoh response :</p>
                <div class="bg-dark py-1">
                    <pre class="text-light mt-2">
    {
        "success": true,
        "data": {
            "title": "test ini post ke 3",
            "body": "ini body post ke 3",
            "updated_at": "2025-01-02T06:50:17.000000Z",
            "created_at": "2025-01-02T06:50:17.000000Z",
            "id": 3
        },
        "message": "Post berhasil ditambahkan"
    }                    
</pre>
                </div>

                <p class="mt-5 text-secondary fw-bold">4. Untuk mengubah post dapat menggunakan :</p>
                <div class="bg-dark py-2">
                    <code class="text-light ms-5">
                        PUT localhost:8000/api/posts/id
                    </code>
                </div>
                <p>Dengan method PUT dan diakhir endpoint beri "id" dari post yang ingin diubah.</p>
                <p>Berikan nilai pada field yang ingin dirubah 'title / body / keduanya'.</p>
                <p>Contoh response :</p>
                <div class="bg-dark py-1">
                    <pre class="text-light mt-2">
    {
        "success": true,
        "data": {
            "id": 4,
            "title": "ini title post 4 yang baru",
            "body": "ini body post  4 yang baru",
            "created_at": "2025-01-02T07:23:17.000000Z",
            "updated_at": "2025-01-02T07:29:45.000000Z"
        },
        "message": "Post berhasil diubah"
    }                  
</pre>
                </div>

                <p class="mt-5 text-secondary fw-bold">5. Untuk menghapus post dapat menggunakan :</p>
                <div class="bg-dark py-2">
                    <code class="text-light ms-5">
                        DELETE localhost:8000/api/posts/id
                    </code>
                </div>
                <p>Dengan method DELETE dan diakhir endpoint beri "id" dari post yang ingin dihapus.</p>

                <p>Contoh response :</p>
                <div class="bg-dark py-1">
                    <pre class="text-light mt-2">
    {
        "success": true,
        "data": null,
        "message": "Post berhasil dihapus"
    }                
</pre>
                </div>

            </div>
        </div>
    </div>

    <div style="height: 200px;">
        
    </div>
@endsection
