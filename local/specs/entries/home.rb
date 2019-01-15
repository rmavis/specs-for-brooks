module Local::Specs::Entries::Home

  # This is the Entry type.
  def self.type
    :View
  end

  # Home.fields :: void -> hash
  def self.fields
    {
      :meta => :Meta,
      :header => :PlainText,
      :background => :Image,
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
      "#{DirMap.html_views}/entries/home.html.erb"
    else
      "#{DirMap.html_views}/entries/home.html.erb"
    end
  end

  # output_file :: symbol -> string
  def output_file(type)
    if (type == :html)
      "#{DirMap.public}/#{self.filename}.html"
    else
      "#{DirMap.public}/#{self.filename}.html"
    end
  end

end
