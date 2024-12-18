<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>User Management</h1>

    <!-- Form Tambah/Edit User -->
    <form id="userForm" class="mb-4">
        <input type="hidden" id="userId">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>

    <!-- Table Data User -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="userTable">
            <!-- Rows akan dimuat menggunakan JavaScript -->
        </tbody>
    </table>
</div>

<script>
    const apiUrl = '/api/users'; // Ganti dengan path API sesuai konfigurasi rute Anda

    // Load semua user
    async function loadUsers() {
        const response = await fetch(apiUrl);
        const users = await response.json();
        const userTable = document.getElementById('userTable');
        userTable.innerHTML = ''; // Clear table

        users.forEach(user => {
            userTable.innerHTML += `
                <tr>
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="editUser(${user.id}, '${user.name}', '${user.email}')">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteUser(${user.id})">Delete</button>
                    </td>
                </tr>
            `;
        });
    }

    // Tambah/Update user
    document.getElementById('userForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const id = document.getElementById('userId').value;
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;

        const method = id ? 'PUT' : 'POST';
        const url = id ? `${apiUrl}/${id}` : apiUrl;

        const response = await fetch(url, {
            method: method,
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name, email })
        });

        if (response.ok) {
            loadUsers();
            document.getElementById('userForm').reset();
        } else {
            alert('Failed to save user');
        }
    });

    // Edit user
    function editUser(id, name, email) {
        document.getElementById('userId').value = id;
        document.getElementById('name').value = name;
        document.getElementById('email').value = email;
    }

    // Hapus user
    async function deleteUser(id) {
        if (confirm('Are you sure?')) {
            const response = await fetch(`${apiUrl}/${id}`, { method: 'DELETE' });
            if (response.ok) {
                loadUsers();
            } else {
                alert('Failed to delete user');
            }
        }
    }

    // Load user saat halaman dimuat
    loadUsers();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
