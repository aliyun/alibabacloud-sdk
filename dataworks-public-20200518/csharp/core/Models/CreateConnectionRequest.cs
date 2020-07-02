// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateConnectionRequest : TeaModel {
        [NameInMap("ProjectId")]
        [Validation(Required=true)]
        public long ProjectId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("ConnectionType")]
        [Validation(Required=true)]
        public string ConnectionType { get; set; }

        [NameInMap("SubType")]
        [Validation(Required=false)]
        public string SubType { get; set; }

        [NameInMap("EnvType")]
        [Validation(Required=true)]
        public int? EnvType { get; set; }

        [NameInMap("Content")]
        [Validation(Required=true)]
        public string Content { get; set; }

    }

}
