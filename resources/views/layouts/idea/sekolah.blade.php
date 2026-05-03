<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
            {{ __('Sekolah') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/school" class="mb-5">
                        @csrf
                        <div class="mb-3">
                            <label for="school_input" class="form-label">Tambahkan Sekolah Baru</label>
                            <input type="text" name="school" id="school_input" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary bg-primary">Tambah Sekolah</button>
                    </form>

                    <div class="mb-3">
                        <label for="school" class="form-label">Daftar Sekolah</label>
                        <table class="table-fixed">
                            <thead>
                                <tr class="whitespace-nowrap ...">
                                    <th class="border p-2">No</th>
                                    <th class="border p-2">Nama Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($school as $key => $item)
                                <tr>
                                    <td class="border p-2">{{ $key+1 }}</td>
                                    <td class="border p-2">{{ $item->school }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function toggleStatus(schoolId) {
        fetch(`{{ route('school.toggleStatus', ['id' => ':id']) }}`.replace(':id', schoolId), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);

            // Handle the response or update UI as needed
            const checkbox = document.getElementById(`flexSwitchCheck${schoolId}`);
            if (data.status === 1) {
                // The school is enabled
                // Update UI accordingly, e.g., toggle checkbox state or change background color
                checkbox.checked = true;
            } else {
                // The school is disabled
                // Update UI accordingly
                checkbox.checked = false;
            }

            // Display status message
            document.getElementById('statusMessage').innerText = data.message;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Function to handle edit button click
    function editSchool(schoolId, schoolName) {
    // Set form input values
        document.getElementById('school').value = schoolName;
        document.getElementById('school_id').value = schoolId;
        document.querySelector('button[type="submit"]').innerText = 'Edit Sekolah';
    
    // Update form URL and method for editing
        document.getElementById('schoolForm').action = `{{ route('school.update', ['school' => ':id']) }}`.replace(':id', schoolId);
        document.getElementById('schoolForm').method = 'POST';
        document.getElementById('school').setAttribute('data-edit-id', schoolId);
}

    // Function to handle cancel button click
    function cancelForm() {
        // Reset form input
        document.getElementById('school').value = '';
        document.getElementById('school_id').value = '';
        document.getElementById('schoolForm').action = '{{ route('school.store') }}';  // Reset action to add school
        document.getElementById('schoolForm').method = 'POST';  // Reset method to POST
        document.getElementById('school').removeAttribute('data-edit-id');

        // Reset button text to "Tambah Sekolah"
        document.querySelector('button[type="submit"]').innerText = 'Tambah Sekolah';
    }

    function deleteSchool(schoolId) {
        // Confirmation before deletion
        const confirmDelete = confirm('Apakah Anda yakin ingin menghapus sekolah ini?');

        if (confirmDelete) {
            // Send DELETE request to the backend
            fetch(`{{ route('school.delete', ['id' => ':id']) }}`.replace(':id', schoolId), {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);

                // Handle the response or update UI as needed
                if (data.status === 'success') {
                    // Reset form input after successful deletion
                    document.getElementById('school').value = '';
                    document.getElementById('school').removeAttribute('data-edit-id');

                    // Remove table row from UI after successful deletion
                    const rowToDelete = document.getElementById(`row${schoolId}`);
                    if (rowToDelete) {
                        rowToDelete.remove();
                    } else {
                        alert('Baris tabel tidak ditemukan.');
                    }

                    // Reset button text to "Tambah Sekolah"
                    document.querySelector('button[type="submit"]').innerText = 'Tambah Sekolah';
                } else {
                    alert('Gagal menghapus sekolah.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    }

    function submitSchoolForm() {
    event.preventDefault();
    const schoolId = document.getElementById('school').getAttribute('data-edit-id');
    const actionUrl = schoolId ? `{{ route('school.update', ['school' => ':id']) }}`.replace(':id', schoolId) : `{{ route('school.store') }}`;

    // Determine the method based on whether it's an edit or add operation
    const method = schoolId ? 'PUT' : 'POST';

    // Send POST or PUT request to the backend
    fetch(actionUrl, {
        method: method,
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({
            school: document.getElementById('school').value,
        }),
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);

        // Handle the response or update UI as needed
        if (data.status === 'success') {
            // Reset form input after successful addition/update
            document.getElementById('school').value = '';
            document.getElementById('school').removeAttribute('data-edit-id');

            // Refresh the page after successful addition/update
            location.reload();
        } else {
            alert('Gagal menambah/mengubah sekolah.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>
