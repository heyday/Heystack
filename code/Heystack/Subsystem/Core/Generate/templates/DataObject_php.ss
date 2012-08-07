$P
/**
 * $Name
 *
 * This class has been auto-generated by Heystack
 */
class $Name extends $Extends
{

<% if db %>    public static {$D}db = $db;
<% end_if %>
<% if has_one %>    public static {$D}has_one = $has_one;
<% end_if %>
<% if has_many %>    public static {$D}has_many = $has_many;
<% end_if %>
<% if summary_fields %>    public static {$D}summary_fields = $summary_fields;
<% end_if %>
<% if searchable_fields %>    public static {$D}searchable_fields = $searchable_fields;
<% end_if %>
<% if singular_name %>    public static {$D}singular_name = $singular_name;
<% end_if %>
<% if plural_name %>    public static {$D}plural_name = $plural_name;
<% end_if %>

    public function getCMSFields({$D}readOnly = true)
    {
    
        if ({$D}readOnly) {
    
            return parent::getCMSFields()->makeReadonly();
        
        }
        
        return parent::getCMSFields();
    
    }
    
    public function canCreate()
    {
    
        return false;
        
    }
    
}