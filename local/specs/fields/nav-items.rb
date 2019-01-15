module Local::Specs::Fields::NavItems

  def self.type
    :Collection
  end

  # NavItems.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :local => {
      },
      :remote => {
      },
    }.deep_merge(attrs)

    return {
      :local => {:Entry => _attrs[:local]},
      :remote => {:Link => _attrs[:remote]},
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
