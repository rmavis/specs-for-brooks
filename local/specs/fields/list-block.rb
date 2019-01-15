module Local::Specs::Fields::ListBlock

  def self.type
    :Compound
  end

  # Lists.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :header => {
        :required => nil,
      },
      :items => {
        :required => true,
      },
    }.deep_merge(attrs)

    return {
      :header => {:PlainText => _attrs[:header]},
      :items => {:List => _attrs[:items]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/list-block.html.erb"
    else
      "#{DirMap.html_views}/fields/list-block.html.erb"
    end
  end

end
