// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListTopicsRequest : TeaModel {
        [NameInMap("BeginTime")]
        [Validation(Required=true)]
        public string BeginTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("TopicTypes")]
        [Validation(Required=false)]
        public string TopicTypes { get; set; }

        [NameInMap("TopicStatuses")]
        [Validation(Required=false)]
        public string TopicStatuses { get; set; }

        [NameInMap("NodeId")]
        [Validation(Required=false)]
        public long NodeId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=false)]
        public long InstanceId { get; set; }

        [NameInMap("Owner")]
        [Validation(Required=false)]
        public string Owner { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

    }

}
