<?php

return [
    'settings' => [
        'title' => 'Tối ưu tốc độ',
        'description' => 'Nén HTML output, inline CSS, xóa chú thích...',
        'enable' => 'Bật tối ưu tốc độ?',
    ],
    'collapse_white_space' => 'Thu gọn khoảng trắng',
    'collapse_white_space_description' => 'Bộ lọc này giảm số byte được truyền trong tệp HTML bằng cách xóa khoảng trắng không cần thiết.',
    'elide_attributes' => 'Thuộc tính Elide',
    'elide_attributes_description' => 'Bộ lọc này giảm kích thước truyền của tệp HTML bằng cách xóa thuộc tính khỏi thẻ khi giá trị được chỉ định bằng giá trị mặc định cho thuộc tính đó. Điều này có thể tiết kiệm một lượng byte khiêm tốn và có thể làm cho tài liệu dễ nén hơn bằng cách chuẩn hóa các thẻ bị ảnh hưởng.',
    'inline_css' => 'CSS nội tuyến',
    'inline_css_description' => 'Bộ lọc này chuyển đổi thuộc tính "kiểu" nội tuyến của thẻ thành các lớp bằng cách di chuyển CSS sang tiêu đề.',
    'insert_dns_prefetch' => 'Chèn tìm nạp trước DNS',
    'insert_dns_prefetch_description' => 'Bộ lọc này chèn các thẻ vào HEAD để cho phép trình duyệt thực hiện tìm nạp trước DNS.',
    'remove_comments' => 'Xóa nhận xét',
    'remove_comments_description' => 'Bộ lọc này loại bỏ các nhận xét HTML, JS và CSS. Bộ lọc giảm kích thước truyền của tệp HTML bằng cách xóa nhận xét. Tùy thuộc vào tệp HTML, bộ lọc này có thể giảm đáng kể số byte được truyền trên mạng.',
    'remove_quotes' => 'Xóa dấu ngoặc kép',
    'remove_quotes_description' => 'Bộ lọc này loại bỏ các dấu ngoặc kép không cần thiết khỏi các thuộc tính HTML. Mặc dù được yêu cầu bởi các thông số kỹ thuật HTML khác nhau, các trình duyệt vẫn cho phép bỏ qua khi giá trị của một thuộc tính bao gồm một tập hợp con các ký tự nhất định (chữ và số và một số ký tự dấu chấm câu).',
    'defer_javascript' => 'Trì hoãn javascript',
    'defer_javascript_description' => 'Trì hoãn việc thực thi javascript trong HTML. Nếu cần, hãy hủy trì hoãn trong một số tập lệnh, hãy sử dụng data-pagespeed-no-defer làm thuộc tính tập lệnh để hủy trì hoãn.',
];
