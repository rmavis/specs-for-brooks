module Local::Specs::Fields::ImageAndText

  def self.type
    :Compound
  end

  # ImageAndText.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :file => {
        :required => true,
      },
      :title => {
        :required => nil,
      },
      :caption => {
        :required => nil,
      },
    }.deep_merge(attrs)

    return {
      :file => {:Image => _attrs[:file]},
      :title => {:PlainText => _attrs[:title]},
      :caption => {:PlainText => _attrs[:caption]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/image-and-text.html.erb"
    else
      "#{DirMap.html_views}/fields/image-and-text.html.erb"
    end
  end

end
