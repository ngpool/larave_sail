
function initDropdown() {
    return {
        isDropdownOpen: false,

        sortBy(order) {
            console.log('Sort by:', order);

            // メタタグからCSRFトークンを取得
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


            // Ajaxリクエストを送信
            fetch('/sort', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    // 'X-CSRF-TOKEN': '{{ csrf_token() }}' // LaravelのCSRFトークンを追加
                    'X-CSRF-TOKEN': token // LaravelのCSRFトークンを追加

                },
                body: JSON.stringify({ order: order })
            })
            .then(response => {
                if (response.ok) {
                    // リクエストが成功した場合にページをリロードするなどの処理を行う
                    location.reload(); // 例：ページをリロードする
                } else {
                    console.error('Failed to send sort order to server.');
                }
            })
            .catch(error => {
                console.error('Error sending sort order:', error);
            });
        },

                toggleDropdown() {
                    this.isDropdownOpen = !this.isDropdownOpen;
                },

                closeDropdown() {
                    this.isDropdownOpen = false;
                },
            };
}

document.addEventListener('DOMContentLoaded', function () {
    const app = initDropdown();

    window.dropdownMenu = app;
});
