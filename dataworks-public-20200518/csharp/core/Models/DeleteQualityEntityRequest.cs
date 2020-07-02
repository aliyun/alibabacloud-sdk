// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class DeleteQualityEntityRequest : TeaModel {
        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public long EntityId { get; set; }

        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("EnvType")]
        [Validation(Required=true)]
        public string EnvType { get; set; }

    }

}
