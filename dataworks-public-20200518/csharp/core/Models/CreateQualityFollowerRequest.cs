// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateQualityFollowerRequest : TeaModel {
        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("Follower")]
        [Validation(Required=true)]
        public string Follower { get; set; }

        [NameInMap("AlarmMode")]
        [Validation(Required=true)]
        public int? AlarmMode { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public long EntityId { get; set; }

    }

}
