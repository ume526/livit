@foreach($items as $item)
  <item>
    <news_url>{{ $item->news_url }}</news_url>
    <sc_corp></sc_corp>
    <t_type></t_type>
    <sc_name>{{ $title }}</sc_name>
    <news_title>{{ $item->title }}</news_title>
    <description>{{ $item->description }}</description>
    <news_img>{{ $item->image_url }}</news_img>
    <news_tag></news_tag>
    <pub_date></pub_date>
    <end_pub></end_pub>
  </item>
@endforeach
