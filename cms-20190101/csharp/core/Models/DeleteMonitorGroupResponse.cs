// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteMonitorGroupResponse : TeaModel {
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

        [NameInMap("Group")]
        [Validation(Required=true)]
        public DeleteMonitorGroupResponseGroup Group { get; set; }
        public class DeleteMonitorGroupResponseGroup : TeaModel {
            [NameInMap("GroupName")]
            [Validation(Required=true)]
            public string GroupName { get; set; }
            [NameInMap("ContactGroups")]
            [Validation(Required=true)]
            public DeleteMonitorGroupResponseGroupContactGroups ContactGroups { get; set; }
            public class DeleteMonitorGroupResponseGroupContactGroups : TeaModel {
                [NameInMap("ContactGroup")]
                [Validation(Required=true)]
                public List<DeleteMonitorGroupResponseGroupContactGroupsContactGroup> ContactGroup { get; set; }
                public class DeleteMonitorGroupResponseGroupContactGroupsContactGroup : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                }

            }
        };

    }

}
