// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IsTruncated")]
        [Validation(Required=true)]
        public bool? IsTruncated { get; set; }

        [NameInMap("Marker")]
        [Validation(Required=true)]
        public string Marker { get; set; }

        [NameInMap("Groups")]
        [Validation(Required=true)]
        public ListGroupsResponseGroups Groups { get; set; }
        public class ListGroupsResponseGroups : TeaModel {
            [NameInMap("Group")]
            [Validation(Required=true)]
            public List<ListGroupsResponseGroupsGroup> Group { get; set; }
            public class ListGroupsResponseGroupsGroup : TeaModel {
                    public string GroupName { get; set; }
                    public string Comments { get; set; }
                    public string CreateDate { get; set; }
                    public string UpdateDate { get; set; }
            }
        };

    }

}
