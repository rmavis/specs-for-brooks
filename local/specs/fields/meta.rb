module Local::Specs::Fields::Meta

  def self.type
    :Compound
  end

  # Meta.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :title => {
        :required => nil,
      },
      :live => {
        :required => nil,
      },
    }.deep_merge(attrs)

    return {
      :title => {:PlainText => _attrs[:title]},
      :live => {:Bool => _attrs[:live]},
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
