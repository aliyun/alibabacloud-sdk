// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class UpdateQualityFollowerRequest : TeaModel {
        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("FollowerId")]
        [Validation(Required=true)]
        public long FollowerId { get; set; }

        [NameInMap("Follower")]
        [Validation(Required=true)]
        public string Follower { get; set; }

        [NameInMap("AlarmMode")]
        [Validation(Required=true)]
        public int? AlarmMode { get; set; }

    }

}
