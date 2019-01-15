module Local::Specs::Fields::Link

  def self.type
    :Compound
  end

  # Link.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :url => {
        :required => true,
      },
      :text => {
        :required => true,
      },
    }.deep_merge(attrs)

    return {
      :url => {:PlainText => _attrs[:url]},
      :text => {:PlainText => _attrs[:text]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/_compound.html.erb"
    else
      "#{DirMap.html_views}/fields/_compound.html.erb"
    end
  end

end
