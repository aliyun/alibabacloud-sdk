// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitorGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public DescribeMonitorGroupsResponseResources Resources { get; set; }
        public class DescribeMonitorGroupsResponseResources : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeMonitorGroupsResponseResourcesResource> Resource { get; set; }
            public class DescribeMonitorGroupsResponseResourcesResource : TeaModel {
                    public long GroupId { get; set; }
                    public string GroupName { get; set; }
                    public string ServiceId { get; set; }
                    public string Type { get; set; }
                    public long GmtModified { get; set; }
                    public long GmtCreate { get; set; }
                    public string BindUrl { get; set; }
                    public string DynamicTagRuleId { get; set; }
                    public string GroupFounderTagKey { get; set; }
                    public string GroupFounderTagValue { get; set; }
                    public DescribeMonitorGroupsResponseResourcesResourceContactGroups ContactGroups { get; set; }
                    public class DescribeMonitorGroupsResponseResourcesResourceContactGroups : TeaModel {
                        [NameInMap("ContactGroup")]
                        [Validation(Required=true)]
                        public List<DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup> ContactGroup { get; set; }
                        public class DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup : TeaModel {
                            [NameInMap("Name")]
                            [Validation(Required=true)]
                            public string Name { get; set; }

                        }

                    }
                    public DescribeMonitorGroupsResponseResourcesResourceTags Tags { get; set; }
                    public class DescribeMonitorGroupsResponseResourcesResourceTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeMonitorGroupsResponseResourcesResourceTagsTag> Tag { get; set; }
                        public class DescribeMonitorGroupsResponseResourcesResourceTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeMonitorGroupsResponseResourcesResourceTemplateIds TemplateIds { get; set; }
                    public class DescribeMonitorGroupsResponseResourcesResourceTemplateIds : TeaModel {
                        [NameInMap("TemplateId")]
                        [Validation(Required=true)]
                        public List<string> TemplateId { get; set; }

                    }
            }
        };

    }

}
