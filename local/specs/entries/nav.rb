module Local::Specs::Entries::Nav

  # This is the Entry type.
  def self.type
    :View
  end

  # Nav.fields :: void -> hash
  def self.fields
    {
      :links => :NavItems,
    }
  end

  def self.content_path
    "#{DirMap.content}"
  end

  def self.public_path
    "/"
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/entries/nav.html.erb"
    else
      "#{DirMap.html_views}/entries/nav.html.erb"
    end
  end

  # output_file :: symbol -> string
  def output_file(type)
    if (type == :html)
      "#{DirMap.html_views}/snippets/nav-list.html.erb"
    else
      "#{DirMap.html_views}/snippets/nav-list.html.erb"
    end
  end

end
