<?php

return [
    'settings' => [
        'title' => '优化',
        'description' => '压缩HTML输出，内联CSS，删除注释...',
        'enable' => '启用优化页面速度吗？',
    ],
    'collapse_white_space' => '折叠空白',
    'collapse_white_space_description' => '此过滤器通过删除不必要的空格来减少在HTML文件中传输的字节。',
    'elide_attributes' => '省略属性',
    'elide_attributes_description' => '该过滤器通过在指定值等于该属性的默认值时，从标签中删除属性来减少HTML文件的传输大小。这可以节省一定数量的字节，并可能通过规范化受影响的标签使文档更易于压缩。',
    'inline_css' => '行内CSS',
    'inline_css_description' => '这个过滤器通过将CSS移动到头部，将标签的内联“style”属性转换为类。',
    'insert_dns_prefetch' => '插入DNS预取',
    'insert_dns_prefetch_description' => '这个过滤器在HEAD中注入标签，以使浏览器能够进行DNS预取。',
    'remove_comments' => '删除注释',
    'remove_comments_description' => '此过滤器消除HTML、JS和CSS注释。该过滤器通过删除注释来减少HTML文件的传输大小。根据HTML文件的不同，此过滤器可以显著减少在网络上传输的字节数。',
    'remove_quotes' => '移除引号',
    'remove_quotes_description' => '该过滤器消除HTML属性中不必要的引号。虽然各种HTML规范要求使用引号，但当属性的值由某些字符（字母数字和一些标点符号）组成时，浏览器允许省略引号。',
    'defer_javascript' => '延迟javascript',
    'defer_javascript_description' => '推迟HTML中JavaScript的执行。如果需要在某些脚本中取消推迟，请使用data-pagespeed-no-defer作为脚本属性来取消推迟。',
];
