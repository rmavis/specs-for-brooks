module Local::Specs::Fields::GalleryBlocks

  def self.type
    :Collection
  end

  # GalleryBlocks.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :image => {
      },
    }.deep_merge(attrs)

    return {
      :image => {:ImageAndText => _attrs[:image]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/_collection.html.erb"
    else
      "#{DirMap.html_views}/fields/_collection.html.erb"
    end
  end

end
