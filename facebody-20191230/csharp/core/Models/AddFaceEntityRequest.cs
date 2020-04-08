// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class AddFaceEntityRequest : TeaModel {
        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public string EntityId { get; set; }

        [NameInMap("Labels")]
        [Validation(Required=false)]
        public string Labels { get; set; }

    }

}
